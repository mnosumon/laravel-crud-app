<?php
use App\Http\Controllers\PostController;
use App\Models\post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['datas'=>post::all()]);
})->name('home');
Route::get('/about', function () {
    return view('about');
});

Route::get('/data', [PostController::class, 'dataMethod']);
Route::post('/store', [PostController::class, 'storeMethod'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editMethod'])->name('edit');
Route::post('/update/{id}', [PostController::class, 'updateMethod'])->name('update');
