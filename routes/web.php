<?php

use Illuminate\Support\Facades\Route;

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
});


Route::get('Wbill/', function () {
    return view('WaterBill');
});

Route::get('Ebill/', function () {
    return view('ElectricityBill');
});

Route::get('HomePage/', function () {
    return view('HomePage');
});

Route::post('/saveWbill', 'WbillController@store');
Route::post('/saveEbill','EbillController@details');

Route:: get('WbillTable/', function (){
    return view('WbillTable');
});

Route:: get('EbillTable/', function (){
    return view('EbillTable');
});
