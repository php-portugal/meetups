<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::view('about', 'about')->name('about');
Route::view('job-board', 'job-board')->name('job-board');
Route::view('call-for-speakers', 'call-for-speakers')->name('call-for-speakers');
Route::redirect('/telegram', 'https://t.me/%2BlcFZSTzTMwc3NjQ8');
