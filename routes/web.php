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
    return view('skripsi_home');
});

// Route::get('/sensing', function () {
//     return view('skripsi_sensing');
// });

Route::get('/cara-pakai', function () {
    return view('skripsi_carapakai');
});

Route::get('/perangkat', function () {
    return view('skripsi_perangkat');
});

// Route::get('/check-status', function () {
//     return view('skripsi_checkstatus');
// });

Route::get('/sensing','SensingViewController@index');

Route::get('/check-status','StatusViewController@index');


