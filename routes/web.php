<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    throw new \Exception();
    return view('welcome');
});

Route::controller(PostController::class)->group(function () {
    Route::get('post', 'index');
    Route::get('post/{post}', 'show');
    Route::post('post', 'store');
});
