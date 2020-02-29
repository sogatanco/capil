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

Route::get('/', 'PagesController@welcome');

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/profil', 'UserController@profil');
Route::patch('/profil', 'UserController@updateUser');
Route::get('/ktp', 'UserController@ktp');
Route::post('/ktp', 'UserController@submitKtp');
Route::get('/kk', 'UserController@kk');
Route::post('/kk', 'UserController@submitKk');
Route::get('/akte', 'UserController@akte');
Route::post('/akte', 'UserController@submitAkte');
Route::post('/anggota', 'UserController@tambahAnggota');
Route::delete('/anggota/{anggota}', 'UserController@deleteAnggota');
Route::post('/upload', 'UserController@upload')->name('upload');

Route::get('/logout', 'Auth\LoginController@logoutUser')->name('logout.user');
Route::get('/desa/{kecamatan}', 'UserController@showDesa');

Route::group(['prefix'=>'admin'], function(){
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('logout.admin');
});

Route::group(['prefix'=>'operator'], function(){
    Route::get('/login', 'AuthOperator\LoginController@showLoginForm')->name('operator.login');
    Route::post('/login', 'AuthOperator\LoginController@login')->name('operator.login.submit');
    Route::get('/', 'OperatorController@index')->name('operator.home');
    Route::get('/logout', 'AuthOperator\LoginController@logout')->name('logout.operator');
});

Route::get('/ktp', 'UserController@ktp');





// Route::get('/notifikasi', function () {
//     return view('notifikasi');
// });

// Route::get('/admin/login', function () {
//     return view('admin/login');
// });
// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard');
// });

// Route::get('/operator/login', function () {
//     return view('operator/login');
// });
