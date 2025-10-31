<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PostController;


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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/mypage/profile', function () {
    return view('auth.profile-edit');
});


Route::middleware('auth')->group(function () {
    Route::post('/', [ItemController::class, 'index']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [ItemController::class, 'index']);
});

Route::middleware('auth')->group(function () {
    Route::get('/purchase', [ItemController::class, 'buy'])->name('buy');
});

Route::get('/item', [ItemController::class, 'show'])->name('item');

Route::post('/item/{post}', [PostController::class, 'favorite'])->name('post.like');
