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
    return view('home');
});

Route::get('/interaction', function () {
    return view('interaction');
});

Route::get('/signature', function () {
    return view('signature');
});

Route::get('/archives', 'SignatureController@view');

Route::post('/signature', 'SignatureController@insertSignature');
Route::get('/fetch-signatures', 'SignatureController@fetchSignature');
