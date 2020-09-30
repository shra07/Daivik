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
    return view('login');
    // Route::post('/login',"Controller@login");  
});
Route::get('user/register', function () {
    return view('register');
     
});

Route::post('birthday','FrontController@index');
Route::post('user_register','Auth\RegisterController@postRegister');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
