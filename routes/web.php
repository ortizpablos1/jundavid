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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/events', function () {
    return view('auth.events.create');
});
Route::get('/tickets', function () {
    return view('auth.tickets.create');
});
Route::get('/sessions', function () {
    return view('auth.sessions.create');
});
Route::get('/channels', function () {
    return view('auth.channels.create');
});
Route::get('/rooms', function () {
    return view('auth.rooms.create');
})->name('rooms');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/event', 'EventController');

