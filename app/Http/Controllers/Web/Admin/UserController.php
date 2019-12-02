<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\UserInterface;
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
        $data['title'] = 'Users';
        $data['records'] = $this->activeRepo->all();
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
        $data['title'] = 'User Create';
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
        $data['title'] = 'Show Users';
        $data['record'] = $record;
        return view('admin.pages.booking.show', $data);
    }
}
