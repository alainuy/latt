<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use Carbon\Carbon;
use DB;


class AttendancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Attendance::all();
        // $current = Carbon::now()->format('h:i:s');
        $current = Carbon::now();

        return view('tito')->with('current', $current);
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
        // $now = Carbon::now()->format('H:i:s');
        // $now = Carbon::now();

        // $timein = new Attendance;
        // $timein->emp_id = $request->emp_id;
        // $timein->time_in = Carbon::now();
        // $timein->time_in = $now;
        // $timein->time_in = $now->format('H:i:s');
        // $timein->save();    
        // return redirect('/');
        // return redirect()->back();

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
                
                // return 'Time Out Successful!';
                return redirect()->back();

        }
 
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
        // $timeout = Attendance::where('emp_id', '=', $request->emp_id)
        // ->whereNull('time_out')
        // ->firstOrFail()
        // ->update([
        //     'time_out' => Carbon::now()]
        // ->save();

        // ]);
        // $now = Carbon::now();


        // return $this->attendances()->where('day', $now)->whereNull('time_out')->firstOrFail()->update(['time_out' => $now->format('H:i:s'),]);

        // $timeout->time_out = Carbon::now();
        // $timeout->save();

        // return $this->attendances()->where('day', $now->format('Y-m-d'))->whereNull('time_out')->firstOrFail()->update(['time_out' => $now->format('H:i:s'),]);

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
