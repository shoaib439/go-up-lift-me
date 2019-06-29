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
    return view('Main');
});

Auth::routes();

Route::get('/Sign-in', function () {
    return view('Signin');
});


Route::get('/Sign-up', function () {
    return view('Signup');
});

Route::get('/privacy', function () {
    return view('privacyPolicy');
});


Route::get('/home', 'HomeController@index')->name('home');


//////////////////////////////////////////
/// controllers
//Route::Post('/register','Auth\RegisterController@create');

///////////////////////////////////////////





//////////////////////////////////facebook login route//////////////////////////



Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


//////////////////////////////////facebook login route//////////////////////////