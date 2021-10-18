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
Route::get('plans', 'Admin\PlanController@index')->name('plans.index');
Route::get('plans/{url}', 'Admin\PlanController@show')->name('plans.show');
Route::get('plans/create', 'PlanController@create')->name('plans.create');
//Route::get('plans/create', 'Admin\PlanController@create')->name('plans.create');
Route::put('plans/{url}', 'PlanController@update')->name('plans.update');
Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
Route::any('plans/search', 'Admin\PlanController@search')->name('plans.search');
Route::delete('plans/{url}', 'Admin\PlanController@destroy')->name('plans.destroy');
Route::post('plans', 'PlanController@store')->name('plans.store');

Route::get('/', function () {
    return view('welcome');
});
