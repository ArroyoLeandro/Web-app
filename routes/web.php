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
    return view('home');
});
Route::get('home', function () {
    return view('home');
})->name('home');
Route::get('users', 'UsersController@index')->name('users');
Route::get('users/delete/{id}', 'UsersController@delete')->name('users.delete');
Route::post('users_save', 'UsersController@save')->name('users_save');
