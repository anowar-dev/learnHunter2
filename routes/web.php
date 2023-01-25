<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\studentController;

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
    return view('welcome');
});

//Class crud route
Route::get('class', [App\Http\Controllers\Admin\ClassController::class, 'index'])->name('class.index');
Route::get('create/class', [\App\Http\Controllers\Admin\ClassController::class, 'create'])->name('create.class');
Route::post('store/class', [\App\Http\Controllers\Admin\ClassController::class, 'store'])->name('store.class');
Route::delete('delete/class', [\App\Http\Controllers\Admin\ClassController::class, 'delete'])->name('class.delete');



//Student_crude
Route::resource('students', studentController::class);

Route::get('/laravel', function(){
    return view('laravel');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
