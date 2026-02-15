<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\DashboardController;


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
    return view('welcome');
});
Route::get('/dashboard', [DashboardController:: class, 'index'] );
Route::get('/pembeli', [PembeliController:: class, 'index'] );
Route::get('/pembeli/create', [PembeliController:: class, 'create'] );
Route::post('/pembeli/store', [PembeliController:: class, 'store'] );
Route::get('/pembeli/edit/{id}', [PembeliController:: class, 'edit'] );
Route::post('/pembeli/update/{id}', [PembeliController:: class, 'update'] );
Route::get('/pembeli/delete/{id}', [PembeliController:: class, 'delete'] );

Route::get('/dashboard', [DashboardController:: class, 'index'] );
Route::get('/aset', [AsetController:: class, 'index'] );
Route::get('/aset/create', [AsetController:: class, 'create'] );
Route::post('/aset/store', [AsetController:: class, 'store'] );
Route::get('/aset/edit/{id}', [AsetController:: class, 'edit'] );
Route::post('/aset/update/{id}', [AsetController:: class, 'update'] );
Route::get('/aset/delete/{id}', [AsetController:: class, 'delete'] );

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');