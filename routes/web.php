<?php

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

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/helloworld', function(){
    return view('helloworld');
});

Route::get('/test', 'TestController@test');

Route::get('/test2', 'TestController@test2');

//Thios route is mapped to the '/askme' URL to render the Who am i View (an HTML Form) Whats myname controller
Route::get('/askme', function() {
   return view('whoami'); 
});

//Anouther Route is mapped to the '/who ami' an will process the who am i post request
Route::post('/whoami', 'WhatsMyNameController@index');