<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MarchentController;
use App\Http\Controllers\MarchentBajuController;

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
    return view('user');


});
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth','HakAkses:admin']], function () {
    // Route::group(['prefix' => 'admin'], function () {
        Route::resource('/', AdminController::class);
        //anggota
        Route::resource('anggota', AnggotaController::class, ['names' => 'admin.anggota']);
        //sponsor
        Route::resource('sponsor', SponsorController::class, ['names' => 'admin.sponsor']);
        //event
        Route::resource('event', EventController::class, ['names' => 'admin.event']);

        Route::resource('kategori', KategoriController::class, ['names' => 'admin.kategori']);
        Route::group(['prefix' => 'produk'], function () {
            // Route::resource('/', MarchentController::class, ['names' => 'admin.marchent']);
            // Route::resource('baju', MarchentBajuController::class, ['names' => 'admin.marchent.baju']);
            Route::resource('/', ProdukController::class, ['names' => 'admin.produk']);


        });
    });

