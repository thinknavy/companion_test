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
    return view('admin.tickets.tickets');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes admin

Route::get('admin/getTickets','ticketsController@getTickets')->name('getTickets');
Route::post('admin/resultTickets','ticketsController@resultTickets')->name('resultTickets');

Route::get('admin/tickets', function(){
  return view('admin.tickets.tickets');
})->name('tickets');
