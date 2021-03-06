<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\UserInterface;
use App\Entities\User;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends AbstractController
{
    function __construct(
        UserInterface $userRepoInstance
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $userRepoInstance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = '';
        $data['records'] = User::orderBy('id', 'desc')->get();
        return view('admin.pages.user.index', $data);
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data['route'] = route('users.store');
        $data['title'] = '';
        $data['action'] = 'Create';
        $data['code'] = time();
        return view('admin.pages.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $requestData = $request->all();

        try {
            $data = [
                'name' => $requestData['name'],
                'code' => $requestData['code'],
                'type' => $requestData['type'],
                'email' => $requestData['email'],
                'password' => Hash::make($requestData['password']),
            ];

            $record = $this->activeRepo->create($data);

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('alertError', $e->getMessage());
        }

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = request()->all();
        $record = $this->activeRepo->get($id);
        $data['title'] = ' ';
        $data['record'] = $record;
        return view('admin.pages.booking.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $error = [];
        try {
            return parent::destroy($id);
        } catch (\Exception $e) {
            $error['message'] = $e->getMessage();
        }
        return $this->returnResponse(
            $this->getResponseStatus('SUCCESS'),
            'Something went wrong',
            null,
            [$error],
            200
        );
    }
}
