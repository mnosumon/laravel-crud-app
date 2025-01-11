<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
});

Route::get('/data', [PostController::class, 'dataMethod']);
Route::post('/store', [PostController::class, 'storeMethod'])->name('store');
