<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use Carbon\Carbon;
use DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //      
        // $btn1 = $request -> input('btnIn');
        // $btn2 = $request -> input('btnOut');

        if (isset($_POST['btnIn'])) { 
            /* do Time IN */ 

                $now = Carbon::now();

                $timein = new Attendance;
                $timein->emp_id = $request->emp_id;
                $timein->time_in = $now;
                $timein->save();
                
                // return redirect('/');
                return redirect()->back();

        } else if (isset($_POST['btnOut'])) { 
           /* do Time OUT */ 
                $now = Carbon::now();
                $emp_id = $request->emp_id;

                DB::table('attendances')
                ->where('emp_id', $emp_id)
                ->whereNull('time_out')
                ->update(['time_out' => $now, 'updated_at' => $now]);
                
                return 'Time Out Successful!';
    
        }

        // return 'This is button 1'.$btn1. ' button 2 '.$btn2;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
