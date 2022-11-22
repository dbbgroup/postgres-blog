<?php

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

Route::view('/', 'home')->name('home');
Route::view('/post/{id}', 'post')->name('post');
Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');
Route::view('/add-post', 'add-post')->name('add-post');
