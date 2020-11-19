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

// use Illuminate\Routing\Route;  || ini gak bisa

use Illuminate\Support\Facades\Route;

// menu utama
Route::get('/', 'MahasiswaController@mainMenu')->name('mainMenu');

// lihat semua data
Route::get('/daftarMahasiswa', 'MahasiswaController@viewAll')->name('mahasiswa.viewAll')->middleware('auth');

// tambah data
Route::get('/daftarMahasiswa/tambahData', 'MahasiswaController@addData')->name('mahasiswa.addData')->middleware('auth');
Route::post('/daftarMahasiswa', 'MahasiswaController@storeData')->name('mahasiswa.storeData');

// route meng-edit detail 
Route::get('/daftarMahasiswa/{mahasiswa}/edit','MahasiswaController@edit')->name('mahasiswa.edit')->middleware('auth');
Route::post('/daftarMahasiswa/{mahasiswa}','MahasiswaController@update')->name('mahasiswa.update');

// lihat data mahasiswa personal
Route::get('/daftarMahasiswa/{nim}', 'MahasiswaController@viewMahasiswa')->name('viewMahasiswa')->middleware('auth');

// hapus data mahasiswa
Route::delete('/daftarMahasiswa/{id}','MahasiswaController@delete')->name('mahasiswa.delete')->middleware('auth');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
