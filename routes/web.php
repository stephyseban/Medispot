<?php

// ToDo: View Medcial shop details

// ToDo: List all medical shop
// ToDo: View recent medicines on admin dashboard
// ToDo: List medicines added on home dashboard

/**
 * ! Pending
 * ! Admin validation
 * ! Owner validation
 * ! Search by latitude and longitude
 **/

Route::get('/', function () {
    return view('welcome');
});
//auth controll
Auth::routes();

//=============================user Routes=============================//
//=================================================================//
Route::get('/home', 'HomeController@index')->name('home');
//------add medicine to shop
Route::get('medicine/new', 'HomeController@addMedicine');
Route::post('medicine/new', 'HomeController@storeMedicine');
// ----- edit medicine details to shop
Route::get('medicine/edit/{id}', 'HomeController@editMedicine');
Route::post('medicine/edit/{id}', 'HomeController@updateMedicine');
//------ delete medicine from shop list
Route::get('medicine/delete/{id}', 'HomeController@deleteMedicine');
//user view news
Route::get('medicine/news', 'HomeController@viewNews');

// ============================Admin Routes============================//
//=======================================================================//

//--------------Admin user controlll-----------------///
Route::get('admin', 'AdminController@adminView');
// view users list for admin
Route::get('admin/users', 'AdminController@users');
// edit user details work for admn
Route::get('admin/users/edit/{id}', 'AdminController@editUsers');
Route::post('admin/users/edit/{id}', 'AdminController@updateUsers');
//delete users for admin
Route::get('admin/users/delete/{id}', 'AdminController@deleteUsers');

//------------------------------------admin medicine controll ----------//
// view users medicine list for admin
Route::get('admin/users/medicines/{id}', 'AdminController@medicine_shop');
// edit user medicine details from admin
Route::get('admin/users/medicines/edit/{id}', 'AdminController@editMedicine');
Route::post('admin/users/medicines/edit/{id}', 'AdminController@updateadminMedicine');
// delete medicine details for admin
Route::get('admin/users/medicines/delete/{id}', 'AdminController@deleteadminMedicine');

//---------------Admin  news controll ----------------------///
//view news details
Route::get('admin/news', 'AdminController@news');
// add news
Route::get('admin/news/add', 'AdminController@addNews');
Route::post('admin/news/add', 'AdminController@storeNews');
// edit news
Route::get('admin/news/edit/{id}', 'AdminController@editNews');
Route::post('admin/news/edit/{id}', 'AdminController@updateNews');
// delete news
Route::get('admin/news/delete/{id}', 'AdminController@deleteNews');

Route::get('/search', 'HomeController@search');
