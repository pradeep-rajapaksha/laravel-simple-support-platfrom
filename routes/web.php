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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'DashboardController@index')->name('site');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::resource('customers', 'CustomerController');

Route::get('issues/track', 'TicketController@track')->name('issues.track');
Route::resource('issues', 'TicketController');


