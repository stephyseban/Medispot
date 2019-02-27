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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('medicine/new', 'HomeController@addMedicine');
Route::post('medicine/new', 'HomeController@storeMedicine');
Route::get('medicine/edit/{id}', 'HomeController@editMedicine');
Route::post('medicine/edit/{id}', 'HomeController@updateMedicine');
Route::get('medicine/delete/{id}', 'HomeController@deleteMedicine');

// Admin Routes

Route::get('admin/users', 'AdminController@users');
