<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;

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

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout')->middleware('auth');
Route::view('/home', 'user.home')->name('home')->middleware('auth');

Route::get('/', function () {
    return view('index');
});


Route::middleware('auth')->group(function () {
    Route::get('/home', [BookController::class, 'home'])->name('home');
    Route::get('/book/{id}', [BookController::class, 'detail'])->name('detail');
    Route::get('/book/download/{ebook}', [BookController::class, 'download'])->name('download');
    Route::post('/home/search', [BookController::class, 'homesearch'])->name('home.search');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::get('/admin/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/admin/overview', [BookController::class, 'overview'])->name('book.overview');
Route::post('/admin/book/search', [BookController::class, 'search'])->name('book.search');
Route::get('/admin/book/delete/{id}', [BookController::class, 'destroy'])->name('admin.deletebook');
Route::get('/admin/book/update/{id}', [BookController::class, 'perbarui'])->name('admin.perbaruibook');
Route::get('/admin/book/show/{id}', [BookController::class, 'show'])->name('admin.showbook');
Route::post('/admin/book/update/', [BookController::class, 'update'])->name('book.update');
Route::post('/admin/book/add/save', [BookController::class, 'store'])->name('book.store');
Route::get('/admin/book/add', function () {
    return view('admin.addbook');
})->name('admin.addbook');
});