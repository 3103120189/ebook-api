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

//string
Route::get('coba', function () {
    return "halooo :D";
});

//array JSON
Route::get('coba1', function () {
    return ['aku', 'kamu', 'dia'];
});

//array JSON
Route::get('coba2', function () {
    return [
        'Nama' => 'Rakha YUdhistira',
        'NIS' => 3103120189,
        'Kelas' => 'XII RPL 6'
    ];
});

//array JSON
Route::get('coba3', function () {
    return response()->json(
        [
            'Nama' => 'Rakha YUdhistira',
            'NIS' => 3103120189,
            'Kelas' => 'XII RPL 6'
        ],
        201
    );
});
