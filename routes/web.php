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
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/post/create', [BlogController::class, 'create']);
Route::post('/post', [BlogController::class, 'store']);
Route::get('/post/{id}',[BlogController::class, 'show']);

Route::get('/perfil', [BlogController::class, 'perfil']);

Route::get('/produtos', [BlogController::class, 'produtos']);

Route::get('/Home/{id?}', [BlogController::class, 'Home']);
