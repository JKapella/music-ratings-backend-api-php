<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/albums', function() {
    $albums = [
        'album 1' => 'an isolated mind',
        'album 2' => 'scythe of cosmic chaos',
    ];
    return $albums;
});