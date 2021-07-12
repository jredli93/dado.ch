<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Auth::routes();
Route::middleware(['cors'])->group(function () {
    Route::post('reservations/create', 'ReservationController@createReservation')->name('create.reservation');
});
Route::prefix('reservations')->group(function (){
    Route::get('/{id}', 'ReservationController@index')->name('reservation.index');
    Route::post('/free/dates', 'ReservationController@getFreePeriods')->name('reservation.free.dates');
});

Route::get('/', 'PageController@index')->name('home');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/tattoo', 'PageController@tattoo')->name('tattoo');
Route::get('/removal', 'PageController@removal')->name('removal');
Route::get('/studio', 'PageController@studio')->name('studio');
Route::get('/piercing', 'PageController@piercing')->name('piercing');
Route::get('/form/{id}', 'PageController@form')->name('form');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin/block', 'AdminController@block')->name('admin.block');
Route::delete('/unblock/{id}', 'AdminController@unblock')->name('unblock');

