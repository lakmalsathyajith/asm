<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;

class DashboardController extends AbstractController
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        return view('admin.pages.dashboard.dashboard');
    }
}
