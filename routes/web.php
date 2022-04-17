<?php

use App\Http\Controllers\articleController;
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

Route::get('/', function () {return view('welcome');});
Route::get('/articles/{id?}', [articleController::class, 'index']);
Route::post('/articles/{id?}', [articleController::class, 'store'])->name('article.store');
Route::put('/articles/update/{id?}', [articleController::class, 'update'])->name('article.update');
