<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\RepoInterfaces\DependantInterface;
use App\Contracts\RepoInterfaces\OccupantInterface;
use App\Contracts\RepoInterfaces\RelationInterface;
use App\Http\Controllers\Api\AbstractApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OccupantController extends AbstractApiController
{
    private $dependant;
    private $relation;

    function __construct(OccupantInterface $occupantRepoInstance, DependantInterface $dependantRepoInterface, RelationInterface $relationRepoInterface)
    {
        $this->activeRepo = $occupantRepoInstance;
        $this->dependant = $dependantRepoInterface;
        $this->relation = $relationRepoInterface;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = $this->activeRepo
                // ->with('relations')
                // ->with('dependants')
                ->all();
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $data
            );
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $file = $request->file('document');
        $storagePath = Storage::disk('uploads')->put('docs', $file);
        // Extract the filename
        $storageName = basename($storagePath);
        $file_path = "uploads/docs/" . $storageName;
        $data = [
            'is_primer' => $requestData['is_primer'],
            'f_name' => $requestData['f_name'],
            'l_name' => $requestData['l_name'],
            'dob' => $requestData['dob'],
            'email' => $requestData['email'],
            'f_contact' => $requestData['f_contact'],
            'm_contact' => $requestData['m_contact'],
            'address' => $requestData['address'],
            'is_employed' => $requestData['is_employed'],
            'person_place' => $requestData['person_place'],
            'person_location' => $requestData['person_location'],
            'person_contact' => $requestData['person_contact'],
            'person_address' => $requestData['person_address'],
            'is_doc_passport' => $requestData['is_doc_passport'],
            'is_doc_license' => $requestData['is_doc_license'],
            'is_doc_visa' => $requestData['is_doc_visa'],
            'doc_id' => $requestData['doc_id'],
            'doc_issue_by' => $requestData['doc_issue_by'],
            'document' => $file_path
        ];
        $data = $this->activeRepo->create($data);
        // $data->contents()->sync($requestData['contents']);
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'Occupant added successfully',
            $data,
            200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Occupant $occupant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = $this->activeRepo
                ->with('relations')
                ->with('dependants')
                ->find($id);
            return $this->returnResponse(
                $this->getResponseStatus('SUCCESS'),
                'records fetched successfully',
                $data
            );
        } catch (\Exception $e) {
            return $this->returnResponse();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Occupant $occupant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Occupant $occupant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Occupant $occupant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeDependant(Request $request)
    {
        $requestData = $request->all();
        $data = $this->dependant->create($requestData);
        // $data->contents()->sync($requestData['contents']);
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'Occupant added successfully',
            $data,
            200
        );
    }

    public function storeRelation(Request $request)
    {
        $requestData = $request->all();
        $data = $this->relation->create($requestData);
        // $data->contents()->sync($requestData['contents']);
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'Occupant added successfully',
            $data,
            200
        );
    }
}
