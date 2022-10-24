<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

// route awal
Route::get('/','homeController@index')->name('home');

Route::get('/dashboard','homeController@tampilDashboard')->name('tabDashboard');

// route login
Route::get('/login', [loginController::class, 'index']);

// route tab siswa
    Route::get('/siswa','homeController@tampilSiswa')->name('tabSiswa');

    // route store data input siswa
    Route::post('/siswa/input','siswaController@tambahSiswa')->name('tambahSiswa');

    // route hapus data siswa 
    Route::post('/siswa/hapus','siswaController@hapusSiswa')->name('hapusSiswa');

    // route edit data siswa
    Route::post('/siswa/edit','siswaController@editSiswa')->name('editSiswa');

// route tab nilai
    Route::get('/nilai','homeController@tampilNilai')->name('tabNilai');

    // route store data input nilai
    Route::post('/nilai/input','nilaiController@tambahNilai')->name('tambahNilai');
    
    // route Edit data input nilai
    Route::post('/nilai/edit','nilaiController@EditNilai')->name('editNilai');
    
    // route Hapus data input nilai
    Route::post('/nilai/hapus','nilaiController@hapusNilai')->name('hapusNilai');