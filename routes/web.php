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

Route::get('/', 'HomeController@index')->name('homepage');

//Login

//Route::get('/login','Auth\LoginController@loginBison')->name('login_bison');
Route::post('/login/bison','Auth\LoginController@loginBison')->name('login_bison');
//Route::post('/login', function () {return view('auth/login'));

Route::get('/register', function () {return view('auth/register');});
Route::get('/dash',"Dash\MainController@index")->name("dashbord_index");
Route::get('/message', function () {return view('backend/message');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dash');

//Message
Route::get('/message02','Dash\MainController@declaration')->name ('Users_message02');


// fonction utilisateur

Route::get('/contact_syndic', "Dash\MainController@contact_syndic")->name("contact_syndic");
Route::get('/contact_utile', "Dash\MainController@contact_prestataire")->name("contact_prestataire");
Route::get('/contact_prestataire', "Dash\MainController@contact_utility")->name("contact_utility");
Route::get('/my_index', "Dash\MainController@Mine")->name("my_index");
Route::get('/my_signal', "Dash\MainController@signal")->name("signal");
Route::get('/document', "Dash\MainController@Documents")->name("Documents");
Route::get('/doc_dating', "Dash\MainController@dating")->name("dating");
Route::get('/doc_settlement', "Dash\MainController@settlement")->name("settlement");




//Route administrateur
Route::middleware('auth.admin')->group(function (){

    Route::get('/backend','Lot\MainController@index')->name('backend_homepage');
    Route::get('/add','Lot\MainController@add')->name('backend_add');
    Route::post('/backend/ilot/store','lot\MainController@store')->name('backend_ilot_store');
    Route::post('/backend/ilot/update','lot\MainController@update')->name('backend_ilot_update');
    Route::get('/edit','Lot\MainController@edit')->name('backend_edit');
    Route::get('/appartement','Lot\AppartementController@index')->name('backend_appartement');

});
