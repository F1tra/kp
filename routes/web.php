<?php

use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile', function(){
})->middleware('auth');

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Auth::routes();
Route::get('dekan', [App\Http\Controllers\DekanController::class, 'index'])->name('admin.dekan');
Route::get('/create_dekan', [App\Http\Controllers\DekanController::class, 'create'])->name('create_dekan');
Route::post('/dekan.store', [App\Http\Controllers\DekanController::class, 'store'])->name('dekan.store');
Route::POST('/dekan/{id}', [App\Http\Controllers\DekanController::class, 'destroy'])->name('dekan.destroy');
Route::get('/dekan/{id}/edit', [App\Http\Controllers\DekanController::class, 'edit'])->name('dekan.edit');
Route::put('/dekan/{id}', [App\Http\Controllers\DekanController::class, 'update'])->name('dekan.update');



// brita
Route::get('/brita', [App\Http\Controllers\BritaController::class, 'index'])->name('brita');
Route::get('/createbrita', [App\Http\Controllers\BritaController::class, 'create'])->name('createbrita');
Route::post('/simpanbrita', [App\Http\Controllers\BritaController::class, 'store'])->name('simpanbrita');
Route::post('/s', [App\Http\Controllers\BritaController::class, 'store'])->name('simpanbrita');
Route::post('/editbrita', [App\Http\Controllers\BritaController::class, 'edit'])->name('editbrita');