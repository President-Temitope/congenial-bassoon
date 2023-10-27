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

Route::prefix('users')->group(function () {
    Route::get('/', 'UsersController@index');
    Route::get('/profile', 'UsersController@profile')->name('profile');
    Route::get('/profile/settings', 'UsersController@profile_settings')->name('profile-settings');
    Route::get('/deleteUser/{id}', 'UsersController@destroy')->name('delete-user');
});
