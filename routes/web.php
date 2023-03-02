<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\LoginController;

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
// index
Route::get('/index',[IndexController::class, 'index'])->name('index');

// destinasi

Route::get('/tambahdestinasi',[DestinasiController::class, 'tambahdestinasi'])->name('tambahdestinasi');
Route::post('/insertdestinasi',[DestinasiController::class, 'insertdestinasi'])->name('insertdestinasi');
Route::get('/tampilkandestinasi/{id}',[DestinasiController::class, 'tampilkandestinasi'])->name('tampilkandestinasi');
Route::post('/updatedestinasi/{id}',[DestinasiController::class, 'updatedestinasi'])->name('updatedestinasi');
Route::get('/deletedestinasi/{id}',[DestinasiController::class, 'deletedestinasi'])->name('deletedestinasi');
Route::get('/maindestinasi',[DestinasiController::class, 'maindestinasi'])->name('maindestinasi');

// kuliner
Route::get('/data_kuliner',[KulinerController::class, 'index'])->name('data_kuliner');
Route::get('/tambahkuliner',[KulinerController::class, 'tambahkuliner'])->name('tambahkuliner');
Route::post('/insertkuliner',[KulinerController::class, 'insertkuliner'])->name('insertkuliner');
Route::get('/tampilkankuliner/{id}',[KulinerController::class, 'tampilkankuliner'])->name('tampilkankuliner');
Route::post('/updatekuliner/{id}',[KulinerController::class, 'updatekuliner'])->name('updatekuliner');
Route::get('/deletekuliner/{id}',[KulinerController::class, 'deletekuliner'])->name('deletekuliner');
Route::get('/mainkuliner',[KulinerController::class, 'mainkuliner'])->name('mainkuliner');


Route::group(['middleware' => ['auth','hakakses:admin,user']],function(){
    Route::get('/data_destinasi',[DestinasiController::class, 'index'])->name('data_destinasi');
});


// Login dan Register
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');