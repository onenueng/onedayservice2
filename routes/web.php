<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bed;
use App\Models\Booking;
use App\Models\Clinic;
use App\Models\Procedure;

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

Route::get('/', function () {
    return view('welcome');
    // return 'one day service 2';
    // return 200;
    // return ['foo' =>1,
    //         'bar' =>2];
});

Route::get('/booking', function(){

    // return App\Models\Bed::all();
    return view('booking')->with([
        'beds'=>Bed::all(),
        'procedures'=>Procedure::all()
    ]);
});

Route::post('/booking', function(){
    //validate
    //save to table
    //redirect
    $data = request->all();
    $booking = new Booking();
    $booking->patient_id = 1;
    $booking->bed_id = $data['bed'];
    $booking->room_id = Bed::find($data['bed'])->room->id;
    $booking->room_id =$data['bed'];
    $booking->procedure_id = $data['procedure'];
    $procedure = Procedure::find($data['procedure']);
    $booking->clinic_id = $procedure->clinic->id;
    
    //datetime_start
    if ($data['time'] == 'morning'){
        $booking->datetime_start = $data['datetime_start'].''.'09:00:00';
        $booking->datetime_stop  = $data['datetime_start'].''.'12:00:00';
    }else{
        $booking->datetime_start = $data['datetime_start'].''.'13:00:00';
        $booking->datetime_stop  = $data['datetime_start'].''.'16:00:00';
    }

    //weekday
    $booking->week_day = now()->parse($data['week_day'])->weekDay();
    $booking->bed_id = 1;
    $booking->user_id = 1;
    $booking->save();

    return $booking;

    //return request()->all();
});

Route::get('/beds', function(){

    // return App\Models\Bed::all();
    return App\Models\Bed::find(4);
});

