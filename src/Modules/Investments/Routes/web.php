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

Route::prefix('investments')->group(function () {
    Route::get('/', 'InvestmentsController@index');
    Route::get('/myPlans', 'InvestmentsController@myPlans');
    Route::get('/viewPlan/{id}', 'InvestmentsController@viewPlan');
    Route::get('/planInfo/{id}', 'InvestmentsController@planInfo')->name('planinfo');
    Route::get('/viewAll', 'InvestmentsController@viewAll');
    Route::get('/deleteInvestment/{id}', 'InvestmentsController@destroy');
    Route::post('/updateInvestment', 'InvestmentsController@update');
    Route::post('/createInvestment', 'InvestmentsController@store');
    Route::get('/deactivatePlan/{id}', 'InvestmentsController@deactivatePlan');
});
