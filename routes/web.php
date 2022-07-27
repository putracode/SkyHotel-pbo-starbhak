<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasUmumController;
use App\Http\Controllers\FasilitasKamarController;

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

route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

route::get('/kamar',[KamarController::class,'index'])->name('kamar');
route::get('/kamar/create',[KamarController::class,'create']);
route::post('/kamar',[KamarController::class,'store']);
route::get('/kamar/{id}/edit',[KamarController::class,'edit']);
route::post('/kamar/{id}',[KamarController::class,'update']);
route::get('/kamar/{id}',[KamarController::class,'destroy']);

route::get('/fasilitaskamar',[FasilitasKamarController::class,'index'])->name('fasilitaskamar');
route::get('/fasilitaskamar/create',[FasilitasKamarController::class,'create']);
route::post('/fasilitaskamar',[FasilitasKamarController::class,'store']);
route::get('/fasilitaskamar/{id}/edit',[FasilitasKamarController::class,'edit']);
route::post('/fasilitaskamar/{id}',[FasilitasKamarController::class,'update']);
route::get('/fasilitaskamar/{id}',[FasilitasKamarController::class,'destroy']);

route::get('/fasilitasumum',[FasilitasUmumController::class,'index'])->name('fasilitasumum');
route::get('/fasilitasumum/create',[FasilitasUmumController::class,'create']);
route::post('/fasilitasumum',[FasilitasUmumController::class,'store']);
route::get('/fasilitasumum/{id}/edit',[FasilitasUmumController::class,'edit']);
route::post('/fasilitasumum/{id}',[FasilitasUmumController::class,'update']);
route::get('/fasilitasumum/{id}',[FasilitasUmumController::class,'destroy']);
