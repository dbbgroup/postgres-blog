<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PostController::class, 'get'])->name('home');
Route::get('/post/{id}', [PostController::class, 'getOne'])->name('post');

Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');

Route::get('/add-post', function () {
    if (Auth::check()) {
        return view('add-post');
    } else return redirect('/login');
})->name('add-post');

Route::post('/login', [AccountController::class, 'login']);
Route::post('/signup', [AccountController::class, 'signup']);

Route::post('/add-post', [PostController::class, 'set']);
