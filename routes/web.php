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
    return view('welcome');
});
Route::get('/our_history', function () {
    return view('our_history');
});
Route::get('/sample_projects', function () {
    return view('sample_projects');
});
Route::get('/talk_to_us', function () {
    return view('talk_to_us');
});
Route::get('/what_we_offer', function () {
    return view('what_we_offer');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
