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
    $data = request()->all();
    // return $data;
    $booking = new Booking();
    $booking->patient_id = 1;
    $booking->bed_id = $data['bed']; //เตียง
    $booking->room_id = Bed::find($data['bed'])->room->id;
    // $bed = Bed::find($data['bed']); //ได้ข้อมูล recored นั้นของ Bed มา
    // $booking->room_id = $bed->room->id //เอา recored ของ bed ที่ได้มามาหาความสัมพันธ์กับ room
    $booking->procedure_id = $data['procedure']; //procedure
    // $procedure = Procedure::find($data['procedure']);//ได้ข้อมูล recored นั้นของ procedure มา
    // $booking->clinic_id = $procedure->clinic->id; //เอา recored ของ procedure ที่ได้มามาหาความสัมพันธ์กับ clinic
    $booking->clinic_id = Procedure::find($data['procedure'])->clinic->id;
    //datetime_start
    if ($data['time'] == 'morning'){
        $booking->datetime_start = $data['datetime_start'].''.'09:00:00';
        $booking->datetime_stop  = $data['datetime_start'].''.'12:00:00';
    }else{
        $booking->datetime_start = $data['datetime_start'].''.'13:00:00';
        $booking->datetime_stop  = $data['datetime_start'].''.'16:00:00';
    }

    //weekday
    $booking->week_day = now()->parse($data['datetime_start'])->weekDay();
    // $booking->bed_id = 1;
    $booking->user_id = 1;
    $booking->save();

    return $booking;

    //return request()->all();
});

Route::get('/beds', function(){

    // return App\Models\Bed::all();
    return App\Models\Bed::find(4);
});

