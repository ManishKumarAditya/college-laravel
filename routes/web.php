<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Models\Result;

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
    return view('home');
})->name('homepage');
Route::get('/insert', function () {
    return view('insert');
})->name('insert');
Route::get('/',[ResultController::class,"homepage"])->name('homepage');
Route::get('/manish',[ResultController::class,"views"])->name('show');
Route::get('/edit/{id}',[ResultController::class,"edit"])->name('edit');
Route::get('/delete/{id}',[ResultController::class,"destroy"])->name('destroy');
Route::post('/insert',[ResultController::class,"store"])->name('insert');
