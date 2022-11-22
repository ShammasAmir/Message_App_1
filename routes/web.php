<?php

use Illuminate\Http\Request;
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

Route::resource("message", \App\Http\Controllers\MessageController::class);

Route::get('/search_writer', '\App\Http\Controllers\MessageController@search_writer')->name("message.search_writer");

Route::get('/search_topic', '\App\Http\Controllers\MessageController@search_topic')->name("message.search_topic");

Route::post('/search_writer_result', '\App\Http\Controllers\MessageController@search_writer_result')->name("message.search_writer_result");

Route::post('/search_topic_result', '\App\Http\Controllers\MessageController@search_topic_result')->name("message.search_topic_result");