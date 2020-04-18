<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
    Route::get('/acceuil', function () {return view('bison');});
    Route::get('/home', "Dash\MainController@indexProprio")->name('dash');
    Route::post('/login/bison','Auth\LoginController@loginBison')->name('login_bison');
//Login
    Route::get('/register', function () {return view('auth/register');});
    Route::get('/dash',"Dash\MainController@indexProprio")->name("dashbord_index");
    Route::get('/message', function () {return view('backend/message');});
    Auth::routes();
//Message
    Route::get('/message02','Dash\MainController@declaration')->name ('Users_message02');
/*
|--------------------------------------------------------------------------
| fonction utilisateur
|--------------------------------------------------------------------------
*/
//menus annuaire
    Route::get('/contact_syndic', "Dash\MainController@contact_syndic")->name("contact_syndic");
    Route::get('/contact_utile', "Dash\MainController@contact_prestataire")->name("contact_prestataire");
    Route::get('/contact_prestataire', "Dash\MainController@contact_utility")->name("contact_utility");
//menus signalement
    Route::get('/my_index', "Dash\MainController@Mine")->name("my_index");
    Route::get('/my_signal', "Dash\MainController@signal")->name("signal");
//menus Documents
    Route::get('/document', "Dash\MainController@Documents")->name("Documents");
    Route::get('/doc_dating', "Dash\MainController@dating")->name("dating");
    Route::get('/doc_settlement', "Dash\MainController@settlement")->name("settlement");
/*
|--------------------------------------------------------------------------
| Route administrateur ou gestionnaire
|--------------------------------------------------------------------------
*/
    Route::middleware('auth.admin')->group(function (){
//acceuille securisé admin liste co-pro
    Route::get('/backend','copro\coProController@index')->name('backend_homepage');
// CRUD CoPropriete
    Route::get('coPro/add','copro\coProController@add')->name('coPro_add');
    Route::post('/backend/coPro/store','copro\coProController@store')->name('backend_coPro_store');
    Route::get('/backend/coPro/edit/{id}','copro\coProController@edit')->name('backendCoProEdit');
    Route::post('/backend/coPro/update/{id}','copro\coProController@update')->name('backendCoProUpdate');
    Route::get('coPro/delete','copro\coProController@delete')->name('coProDelete');
    Route::get('/viewByCopro/{id}','copro\coProController@viewByCopro')->name('backend_viewByCopro');
// CRUD Buget et dépence
    Route::get('/viewBudget/{id}','copro\coProController@viewBySpend')->name('backend_viewBySpend');
//liste batiments
    Route::get('/copro','Lot\MainController@index')->name('copro');
    Route::get('/add','Lot\MainController@add')->name('backend_add');
    Route::get('/viewByBatiment/{id}','Lot\MainController@viewByBatiment')->name('backend_viewByAppartement');
    Route::post('/backend/ilot/store','lot\MainController@store')->name('backend_ilot_store');
    Route::get('/edit/{id}','Lot\MainController@edit')->name('backend_edit');
    Route::get('/view/{id}','Lot\MainController@viewByBatiment')->name('backend_viewByBatiment');
    Route::post('/backend/ilot/update','lot\MainController@update')->name('backend_ilot_update');
    Route::get('/backend/ilot/delete','lot\MainController@delete')->name('backend_ilot_delete');
//gestion des appartement
    Route::get('/appartement','Lot\AppartementController@index')->name('backend_appartement');
//Gestions des messages
    Route::get('/message','Lot\MessagesController@index')->name('messages_ask');
//gestion de l'annuaire
    Route::get('/book','Lot\BooksController@index')->name('Books_index');
    Route::get('/book_syndic','Lot\BooksController@syndic')->name('Books_syndic');
    Route::get('/book_Presta','Lot\BooksController@prestataire')->name('Books_prestataire');
    Route::get('/book_other','Lot\BooksController@other')->name('Books_other');

});
//Route::get('/login','Auth\LoginController@loginBison')->name('login_bison');
//Route::post('/login', function () {return view('auth/login'));
// // messagerie par chatKit
//        //Route::get('/my_signal', 'ChatkitController@index')->name("signal");
//        //Route::post('/', 'ChatkitController@join');
//        //Route::get('/chat', 'ChatkitController@chat')->name('chat');
//        //Route::post('logout', 'ChatkitController@logout')->name('logout');
////Route::get('/dash',"Dash\MainController@getMonthBudgetData")->name("dashbord_index");
/// //Route::get('/home', 'HomeController@index')->name('dash');