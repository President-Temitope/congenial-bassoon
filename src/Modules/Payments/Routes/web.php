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

Route::prefix('payments')->group(function () {
    Route::get('/', 'PaymentsController@index');
    Route::post('/addPayment', 'PaymentsController@addPayment');
    Route::post('/approve', 'PaymentsController@approvePayment')->name('approve-payment');
    Route::post('/update/payment', 'PaymentsController@updatePayment')->name('update-payment');
    Route::get('/delete/{id}', 'PaymentsController@destroy')->name('delete-payment');
});
