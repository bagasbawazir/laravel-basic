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
    return view('layout.app');
});
Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('crew/create', 'CrewController@Create');
Route::post('crew/store', 'CrewController@Store')->name('crew.store');
Route::get('crew', 'CrewController@Index');
Route::get('crew/{id}/delete','CrewController@Destroy')->name('crew.delete');
Route::post('crew/{id}/update','CrewController@Update')->name('crew.update');
