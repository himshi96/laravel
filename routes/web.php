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


Route::get('/Wbill','WbillController@displayform');
Route::post('/saveWbill', 'WbillController@store');

Route::get('/WbillTable', 'WbillController@viewTable');
Route::get('/WbillTable','WbillController@index');
Route::get('/WbillAdd','WbillController@displayform');

Route::get('click_edit/{ID}', 'WbillController@edit_function');
Route::post('/update/{ID}','WbillController@update_function');
Route::get('/click_delete/{ID}','WbillController@delete_function');

Route::get('/Ebill','EbillController@displayform');
Route::post('/saveEbill','EbillController@details');
Route::get('/EbillAdd', 'EbillController@displayform');

Route::get('/EbillTable','EbillController@index');

Route::get('click_edit/{ID}', 'EbillController@edit');
Route::post('/update/{ID}','EbillController@update');
Route::get('/click_delete/{ID}','EbillController@delete');


//---------------------------------------------------------------------------------------------------------------

Route::get('/SecondPage','WbillController@showSecond');
Route::get('/GO','WbillController@showSecond');
Route::get('/finance', 'WbillController@showThird');
Route::get('/SelectButton','WbillController@showThird');
Route::get('/Water_Bills', 'WbillController@displayform');
Route::get('/Electricity_Bills', 'EbillController@displayform');
Route::get('view','EbillController@view');
Route::get('bill', 'WbillController@show_bill');
Route::get('report', 'WbillController@show_report');
Route::get('btn', 'WbillController@btn');
Route::get('loginPage', 'WbillController@submit');
Route::get('finance', 'WbillController@submit');
Route::get('/Submit','WbillController@showThird');

//------------------Inventory Management Part---------------------------


Route::get('/', function () {
    return view('welcome');
});


Route::get('/Inventory', function () {
    return view('Inventory');
});

Route::get('/Furniture', 'FurnitureController@index');

Route::get('/prnpriview', 'FurnitureController@prnpriview');


Route::get('/Catering', 'CateringController@indexc');

Route::get('/prnpriviewc', 'CateringController@prnpriviewc');


Route::get('/AddFurniture', function () {
    $FurData = App\Furniture::all();

    return view('AddFurniture')->with('AddFurniture', $FurData);
});

Route::post('/saveFurniture', 'FurnitureController@store');


Route:: get('/delete/{id}', 'FurnitureController@delete');

Route::get('/update/{id}', 'FurnitureController@updateview');

Route:: post('/updateFurniture', 'FurnitureController@update');

Route::get('/$Furniture', function () {
    return view('printFurniture');
});


Route::get('/AddCatering', function () {
    $CatData = App\Catering::all();
    return view('AddCatering')->with('AddCatering', $CatData);
});

Route::post('/saveCatering', 'CateringController@storeCat');


Route:: get('/deleteCat/{id}', 'CateringController@deleteCat');

Route::get('/updateCat/{id}', 'CateringController@updateviewCat');


Route:: post('/updateCatering', 'CateringController@updateCat');





