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
Route::get('/data/pengurusan', 'PagesController@pengurusan');
Route::get('/data/pengurusan/{pengurusan}', 'PagesController@detailpengurusan');
Route::get('/data/persyaratan/{nik}', 'PagesController@persyaratan');
Route::get('/data/user/{nik}', 'PagesController@user');
Route::get('/data/anak/{anak}', 'PagesController@anak');
Route::get('/data/anggota/{nik}', 'PagesController@anggota');

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/profil', 'UserController@profil');
Route::get('/riwayat', 'UserController@riwayat');
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

    Route::get('/operator','AdminController@operator');
    Route::post('/operator','AdminController@tambahOperator');
    Route::delete('/operator/{operator}','AdminController@deleteOperator');

    Route::get('/pengurusan/ktp','AdminController@ktp');
    Route::get('/pengurusan/kk','AdminController@kk');
    Route::get('/pengurusan/akte','AdminController@akte');
});

Route::group(['prefix'=>'operator'], function(){
    Route::get('/login', 'AuthOperator\LoginController@showLoginForm')->name('operator.login');
    Route::post('/login', 'AuthOperator\LoginController@login')->name('operator.login.submit');
    Route::get('/', 'OperatorController@index')->name('operator.home');

    Route::post('/review/reject', 'OperatorController@reject');
    Route::post('/review/approve', 'OperatorController@approve');

    Route::get('/review/ktp', 'OperatorController@reviewKtp');
    Route::get('/review/akte', 'OperatorController@reviewAkte');
    Route::get('/review/kk', 'OperatorController@reviewKk');

    Route::get('/process/ktp', 'OperatorController@proKtp');
    Route::get('/process/kk', 'OperatorController@proKk');
    Route::get('/process/akte', 'OperatorController@proAkte');
    Route::post('/process/finish', 'OperatorController@finish');

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
