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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/notifikasi', function () {
    return view('notifikasi');
});
Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/operator/login', function () {
    return view('operator/login');
});
