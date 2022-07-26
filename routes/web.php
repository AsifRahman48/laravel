<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Asif;

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

Route::get('/a/{d}', function ($d) {
    echo $d;
    return view('first');
});

Route::get('user/{id}', [Asif::class, 'test']);

//Route::get('/asif/{id}', test($id)) ;