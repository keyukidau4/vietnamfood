<?php

use App\Http\Controllers\AdminController;
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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('admin/login', [AdminController::class, 'returnViewLogin'])->name('admin.login');

Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){

    Route::get('logout',[AdminController::class, 'logout'])->name('logout');

    Route::get('dasboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

