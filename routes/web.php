<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MaritimController;
use App\Models\Maritim;

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
// route menampilkan halaman login
Route::get('login', [LoginController::class, 'index'])->name('auth.login');
// route mengirimkan data login
Route::post('login', [LoginController::class, 'login'])->name('login');
// route menampilkan halaman register
Route::get('register', [RegisterController::class, 'index']);
// route menambahkan data register
Route::post('register', [RegisterController::class, 'create'])->name('register');

Route::get('/maritim', [MaritimController::class, 'index'])->name('maritim.index');
Route::get('/create_maritim', [MaritimController::class, 'create'])->name('maritim.create');
Route::post('/insert_maritim', [MaritimController::class, 'insert']);
Route::get('/tampil/{id}', [MaritimController::class, 'tampil'])->name('tampilmaritim');
Route::post('/edit/{id}', [MaritimController::class, 'edit'])->name('editmaritim');
Route::get('/delete/{id}', [MaritimController::class, 'delete'])->name('deletemaritim');
