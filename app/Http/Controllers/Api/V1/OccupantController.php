<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\FileInterface;
use App\Contracts\RepoInterfaces\OccupantContactInterface;
use App\Contracts\RepoInterfaces\OccupantIdentityInterface;
use App\Contracts\RepoInterfaces\OccupantInterface;
use App\Entities\Occupant;
use App\Http\Controllers\Api\AbstractApiController;
use App\Http\Requests\Occupant\StoreOccupantApiRequest;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class OccupantController extends AbstractApiController
{
    use FileTrait;

    private $fileRepo;
    private $occupantContactRepo;
    private $occupantIdentityRepo;
    private $occupant;

    function __construct(
        FileInterface $fileRepoInstance,
        OccupantInterface $occupantRepoInstance,
        OccupantContactInterface $occupantContactRepoInstance,
        OccupantIdentityInterface $occupantIdentityRepoInstance,
        Occupant $occupant
    )
    {
        $this->fileRepo = $fileRepoInstance;
        $this->activeRepo = $occupantRepoInstance;
        $this->occupantContactRepo = $occupantContactRepoInstance;
        $this->occupantIdentityRepo = $occupantIdentityRepoInstance;
        $this->occupant = $occupant;
    }

    public function storeBulk(StoreOccupantApiRequest $request)
    {
        $requestData = $request->all();
        $data = null;

        try {
            DB::beginTransaction();
            foreach ($requestData['occupants'] as $occupantData) {
                $occupant = [
                    'booking_id'    => $requestData['booking_id'],
                    'first_name'    => $occupantData['first_name'],
                    'last_name'     => $occupantData['last_name'],
                    'date_of_birth' => $occupantData['date_of_birth'],
                    'type'          => $occupantData['type'],
                    'is_primary'    => isset($occupantData['is_primary']) ? $occupantData['is_primary'] : null
                ];
                $occupant = $this->activeRepo->create($occupant);

                if ($occupant->type === $this->occupant->getTypes('adult')) {
                    $contact = [
                        'occupant_id'           => $occupant->id,
                        'email'                 => isset($occupantData['email']) ? $occupantData['email'] : null,
                        'land_phone'            => isset($occupantData['land_phone']) ? $occupantData['land_phone'] : null,
                        'mobile_phone'          => isset($occupantData['mobile_phone']) ? $occupantData['mobile_phone'] : null,
                        'address'               => isset($occupantData['address']) ? $occupantData['address'] : null,
                        'emp_status'            => isset($occupantData['emp_status']) ? $occupantData['emp_status'] : null,
                        'emp_phone'             => isset($occupantData['emp_phone']) ? $occupantData['emp_phone'] : null,
                        'emp_address'           => isset($occupantData['emp_address']) ? $occupantData['emp_address'] : null,
                        'emp_personal_address'  => isset($occupantData['emp_personal_address']) ? $occupantData['emp_personal_address'] : null,
                        'emp_department'        => isset($occupantData['emp_department']) ? $occupantData['emp_department'] : null,
                    ];
                    $this->occupantContactRepo->create($contact);

                    if ($occupant->is_primary) {
                        $identity = [
                            'occupant_id'           => $occupant->id,
                            'identity_type'         => isset($occupantData['identity_type']) ? $occupantData['identity_type'] : null,
                            'identity_number'       => isset($occupantData['identity_number']) ? $occupantData['identity_number'] : null,
                            'identity_issued_by'    => isset($occupantData['identity_issued_by']) ? $occupantData['identity_issued_by'] : null,
                            'next_of_kin'           => isset($occupantData['next_of_kin']) ? $occupantData['next_of_kin'] : null,
                            'kin_relationship'      => isset($occupantData['kin_relationship']) ? $occupantData['kin_relationship'] : null,
                            'kin_email'             => isset($occupantData['kin_email']) ? $occupantData['kin_email'] : null,
                            'kin_address'           => isset($occupantData['kin_address']) ? $occupantData['kin_address'] : null,
                            'kin_land_phone'        => isset($occupantData['kin_land_phone']) ? $occupantData['kin_land_phone'] : null,
                            'kin_mobile_phone'      => isset($occupantData['kin_mobile_phone']) ? $occupantData['kin_mobile_phone'] : null,
                        ];

                        if(!isset($occupantData['identity_file'])) {
                            throw new \Exception('No image reference found');
                        }

                        // check if the file exists
                        $file = $this->activeRepo->get($occupantData['identity_file']);
                        $file->is_temp = false;
                        $file->save();

                        $identity = $this->occupantIdentityRepo->create($identity);
                        $identity->files()->sync([$occupantData['identity_file']]);
                    }
                }
                DB::commit();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'Error Occurred while creating the booking',
                $data,
                [$e->getMessage()]
                ,200
            );
        }

        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'booking added successfully',
            $data,
            [],
            200
        );
    }
}