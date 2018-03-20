<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('tito');
// });

//  Route::get('/', function () {
//      return view('welcome');
//  });

// Route::get('/', 'AttendancesController@index');


Route::resource('/', 'AttendancesController');

// Route::get('/decide', 'TasksController@index');

//  Route::get('/decide', function () {
//      return view('tasks');
//  });

Route::resource('/decide', 'TasksController');

Route::get('/db', function()
{
    $emp_id = 8138;
    $now = Carbon::now();
    // Select all from attendances
    
    // $attendance = DB::table('attendances')->get();

    // Select all from attendances where emp_id = 8136;

    // $attendance = DB::table('attendances')->where('emp_id', $emp_id)->whereNull('time_out')->update(['time_out' => $now, 'updated_at' => $now])->get();
    

    DB::table('attendances')->where('emp_id', $emp_id)->whereNull('time_out')->update(['time_out' => $now, 'updated_at' => $now]);
    return 'Time Out Successful!';

    // dd($attendance);

});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
