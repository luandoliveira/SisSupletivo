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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/searchaluno', [App\Http\Controllers\HomeController::class, 'searchaluno'])->name('search_aluno');
Route::any('/search_aluno_result', [App\Http\Controllers\HomeController::class, 'searchresulaluno'])->name('search_aluno_result');
Route::get('/searchmae', [App\Http\Controllers\HomeController::class, 'searchamae'])->name('search_mae');
Route::any('/search_mae_result', [App\Http\Controllers\HomeController::class, 'searchresulmae'])->name('search_mae_result');
Route::get('/home1', [App\Http\Controllers\SupletivoController::class, 'index'])->name('home');



