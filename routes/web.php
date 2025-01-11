<?php
use App\Http\Controllers\PostController;
use App\Models\post;
use Illuminate\Support\Facades\Route;

//without pagination without pagination without pagination without pagination
// Route::get('/', function () {
//     return view('welcome', ['datas'=>post::all()]);
// })->name('home');

//with pagination   with pagination with pagination with pagination
Route::get('/', function () {
    return view('welcome', ['datas' => post::paginate(3)]);
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', [PostController::class, 'dataMethod']);
Route::post('/store', [PostController::class, 'storeMethod'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editMethod'])->name('edit');
Route::post('/update/{id}', [PostController::class, 'updateMethod'])->name('update');Route::get('/delete/{id}', [PostController::class, 'deleteMethod'])->name('delete');

//without form tag use in delete method         without form tag use delete method 
// Route::post('/update/{id}', [PostController::class, 'updateMethod'])->name('update');

//form tag use in delete method     form tag use in delete method  
Route::delete('/delete/{id}', [PostController::class, 'deleteMethod'])->name('delete');
