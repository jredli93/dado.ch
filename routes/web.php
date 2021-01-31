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

Route::get('/', 'PageController@index')->name('home');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/tattoo', 'PageController@tattoo')->name('tattoo');
Route::get('/removal', 'PageController@removal')->name('removal');
Route::get('/studio', 'PageController@studio')->name('studio');
Route::get('/piercing', 'PageController@piercing')->name('piercing');
