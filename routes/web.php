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
//auth controll
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('medicine/new', 'HomeController@addMedicine');
Route::post('medicine/new', 'HomeController@storeMedicine');
Route::get('medicine/edit/{id}', 'HomeController@editMedicine');
Route::post('medicine/edit/{id}', 'HomeController@updateMedicine');
Route::get('medicine/delete/{id}', 'HomeController@deleteMedicine');

// Admin Routes//
//---------------Admin  news controll
//view news details
Route::get('admin/news', 'AdminController@news');
Route::get('admin/news/add', 'AdminController@addNews');
Route::post('admin/news/add', 'AdminController@storeNews');
Route::get('admin/news/edit/{id}', 'AdminController@editNews');
Route::post('admin/news/edit/{id}', 'AdminController@updateNews');
Route::get('admin/news/delete/{id}', 'AdminController@deleteNews');

//--------------Admin user controlll-----------------///
// view users list for admin
Route::get('admin/users', 'AdminController@users');
// edit user details work for admn
Route::get('admin/users/edit/{id}', 'AdminController@editUsers');
Route::post('admin/users/edit/{id}', 'AdminController@updateUsers');
//delete users for admin
Route::get('admin/users/delete/{id}', 'AdminController@deleteUsers');
// view users medicine list for admin
Route::get('admin/users/medicines/{id}', 'AdminController@medicine_shop');
// edit user medicine details from admin
Route::get('admin/users/medicines/edit/{id}', 'AdminController@editMedicine');
Route::post('admin/users/medicines/edit/{id}', 'AdminController@updateadminMedicine');
// delete medicine details for admin
Route::get('admin/users/delete/{id}', 'AdminController@deleteadminMedicine');
