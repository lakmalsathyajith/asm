<?php

namespace App\Http\Controllers\Web\Admin;

use App\Entities\Apartment;
use App\Entities\Booking;
use App\Entities\User;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;

class DashboardController extends AbstractController
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['apartments'] = Apartment::count();
        $data['bookings'] = Booking::where('status','COMPLETED')->count();
        $data['agents'] = User::where('type','AGENT')->count();
        return view('admin.pages.dashboard.dashboard', $data);
    }
}
