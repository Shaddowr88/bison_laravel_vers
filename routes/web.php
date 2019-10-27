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


Route::get('/acceuil', function () {return view('bison');});
//Login

Route::get('/login','Auth\LoginController@loginBison')->name('login_bison');
Route::post('/login','Auth\LoginController@loginBison')->name('login_bison');
//Route::post('/login', function () {return view('auth/login'));


//Route::get('/register','Auth\LoginController@loginBison')->name('login_bison');
//Route::post('/register','Auth\LoginController@loginBison')->name('login_bison');
Route::get('/register', function () {return view('auth/register');});

Route::get('/dash',"Dash\MainController@index")->name("dashbord_index");

Route::get('/message', function () {return view('backend/message');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('dash');

Route::get('/backend','Lot\MainController@index')->name('backend_homepage');
Route::get('/edit','Lot\MainController@edit')->name('backend_edit');
Route::post('/backend/ilot/update','lot\MainController@update')->name('backend_ilot_update');
Route::middleware('auth.admin')->group(function (){






});
