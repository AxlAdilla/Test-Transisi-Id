<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function(){
    Route::get('/','DashboardController@index');
    Route::resource('company','CompanyController');
    Route::resource('employee','EmployeeController');
});

Route::post('/login','SimpleAuthController@authenticate')->name('loginPost');
Route::get('/login', 'SimpleAuthController@login')->name('login');
Route::get('/logout', 'SimpleAuthController@logout')->name('logout');
