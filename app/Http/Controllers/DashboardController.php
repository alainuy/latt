<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Attendance;

class DashboardController extends Controller
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
        $usr_id = auth()->user()->id;
        $usr = User::find($usr_id);
        
        // $emp = User::where('emp_id', '=', $emp_id)->first();
        
        return view('dashboard')->with('attendances', $usr->attendances);
        // return $emp;
    }
}
