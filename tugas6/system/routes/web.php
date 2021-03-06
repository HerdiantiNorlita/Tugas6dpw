<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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
    return view('client.index');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/flatshoes', function () {
    return view('client.flatshoes');
});

Route::get('/blog', function () {
    return view('client.blog');
});




Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('produk/filter',[ProdukController::class, 'filter']);
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    });
    Route::get('/kategori', function () {
        return view('client.kategori');
    });
    Route::resource('produk', ProdukController::class );
    Route::resource('user', UserController::class );
    
});


Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'Logout']);
