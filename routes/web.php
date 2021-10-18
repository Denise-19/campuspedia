<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
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

// Route::get('/', 'PegawaiController@index');

// Route::get('/pegawai/cetak_pdf/{id}', [PegawaiController::class, 'cetak_pdf']);
Route::resource('pegawai', 'PegawaiController');
Route::get('/pegawai/{id}/cetak_pdf', [PegawaiController::class, 'cetak_pdf']);