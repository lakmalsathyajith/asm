<?php

namespace App\Http\Controllers\Web\Admin;

use App\Contracts\RepoInterfaces\BookingInterface;
use App\Http\Controllers\AbstractController;

class BookingController extends AbstractController
{
    function __construct(
        BookingInterface $bookingRepoInstance
    )
    {
        $this->middleware('auth');

        $this->activeRepo = $bookingRepoInstance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = '';
        $data['records'] = $this->activeRepo->all();
        return view('admin.pages.booking.index', $data);
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
        $data['title'] = 'Show Booking';
        $data['record'] = $record;
        $data['occupant'] = isset($request['occupant'])
            ? $record->occupants->find($request['occupant'])
            : $record->occupants->first();
        $data['occupantSelected'] = isset($request['occupant']);

        return view('admin.pages.booking.show', $data);
    }
}
