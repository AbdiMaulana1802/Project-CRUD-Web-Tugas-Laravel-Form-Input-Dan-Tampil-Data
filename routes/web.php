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

Route::get('/calonsiswa', 'CalonsiswaController@index')->name('calonsiswa.index');

Route::get('/calonsiswa/create', 'CalonsiswaController@create')->name('calonsiswa.create');

Route::post('/calonsiswa', 'CalonsiswaController@store')->name('calonsiswa.store');

//
Route::get('/siswabaru', 'SiswabaruController@index');

//routing 1 data dengan parameter
Route::get('/calonsiswa/{calonsiswa}', 'CalonsiswaController@show')->name('calonsiswa.detail_calon');

//untuk hapus calon siswa
Route::get('/hapussiswa/{calonsiswa}', 'SiswabaruController@delete');

//hapus menggunakan button
// Route::delete('/calonsiswa/{calonsiswa}', 'CalonsiswaController@destroy');

//untuk menampilkan data berdasarkan id view form edit
Route::get('/calonsiswa/{calonsiswa}/edit', 'SiswabaruController@viewform');
//untuk proses edit
Route::patch('/calonsiswa/{calonsiswa}', 'SiswabaruController@prosesEdit');