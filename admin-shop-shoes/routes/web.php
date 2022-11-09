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

Route::group(['as'=>'admin', 'prefix'=>'admin'], function () {
    Route::get('/', function (){
        return view('home');
    })->name('.home');
    Route::get('/basic-table', function (){
        return view('basic-table');
    })->name('.basic-table');
    Route::get('/map', function (){
        return view('map');
    })->name('.map');
    Route::get('/profile', function (){
        return view('profile');
    })->name('.profile');
});

