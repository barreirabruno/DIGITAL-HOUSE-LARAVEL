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
    return view('welcome');
});

Route::get('/header', function(){
    return view('header');
});

Route::get('/navbarTop', function () {
    return view('navbar');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/vitrine', function () {
    return view('vitrine');
});

Route::get('/home', function () {
    return view('home');
});


