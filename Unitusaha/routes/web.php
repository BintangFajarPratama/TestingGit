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

Route::get('/usaha', function () {
    return view('usaha');
});

Route::get('/tambah', function () {
    return view('tambah');
});



Route::get('/UnitUsaha', function () {
    return view('UnitUsaha');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/tambaht', function () {
    return view('tambaht');
});


Route::get('/UnitUsaha', 'App\Http\Controllers\usahaController@index');
Route::get('/UnitUsaha/tambah','App\Http\Controllers\usahaController@tambah');
Route::post('/UnitUsaha/store','App\Http\Controllers\usahaController@store');
Route::get('/UnitUsaha/edit/{id_usaha}','App\Http\Controllers\usahaController@edit');
Route::post('/UnitUsaha/update','App\Http\Controllers\usahaController@update');
Route::get('/UnitUsaha/hapus/{id_usaha}','App\Http\Controllers\usahaController@hapus');

Route::get('/UnitUsaha', [App\Http\Controllers\UnitUsahaController::class, 'index']);
Route::get('/UnitUsaha/tambah',[App\Http\Controllers\UnitUsahaController::class, 'tambah']);
Route::post('/UnitUsaha/store',[App\Http\Controllers\UnitUsahaController::class, 'store']);
Route::get('/UnitUsaha/edit/{id_usaha}',[App\Http\Controllers\UnitUsahaController::class, 'edit']);
Route::post('/UnitUsaha/update',[App\Http\Controllers\UnitUsahaController::class, 'update']);
Route::get('/UnitUsaha/hapus/{id_usaha}',[App\Http\Controllers\UnitUsahaController::class, 'hapus']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/tambaht',[App\Http\Controllers\TransaksiController::class, 'tambaht']);
Route::post('/transaksi/store',[App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/editt/{id_transaksi}',[App\Http\Controllers\TransaksiController::class, 'editt']);
Route::post('/transaksi/update',[App\Http\Controllers\TransaksiController::class, 'update']);
Route::get('/transaksi/hapus/{id_transaksi}',[App\Http\Controllers\TransaksiController::class, 'hapus']);