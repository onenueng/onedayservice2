<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bed;
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
    return request()->all();
});

Route::get('/beds', function(){

    // return App\Models\Bed::all();
    return App\Models\Bed::find(4);
});

