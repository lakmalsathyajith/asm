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
        $data['title'] = 'Booking';
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
        //
    }
}
