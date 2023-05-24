<?php

use Illuminate\Support\Facades\Route;

//* Include Controller login dan register
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {

    Route::resource('admin_tiket', 'App\Http\Controllers\TiketAdminControllers');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function() {

    Route::resource('user_tiket', 'App\Http\Controllers\TiketUserControllers');
});

//* Daftarkan ke route. 
//*                                                              gak boleh masuk kalau udah login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
//*       Alamat Url  Controller yang dijalankan      fungsi yang dijalankan


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout' , [LoginController::class, 'logout']);

//* Sama aja tapi buat register
Route::get('/register', [RegisterController::class, 'index'] )->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);


