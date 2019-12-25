<?php
use RealRashid\SweetAlert\Facades\Alert;


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
	   toast('Your Post as been submited!','error');


    return view('welcome');
});

Route::get('/abc', function () {
    return view('form');
});
Route::post('formsubmit','Controller@post');

