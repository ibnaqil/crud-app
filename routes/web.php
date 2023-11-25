<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(OpdController::class)->group(function () {
//     Route::get('/opd/{id}', 'show');
//     Route::post('/opd', 'store');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
//    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/opd', [OpdController::class, 'index'])->name('opd');
    Route::get('opd/{id}/edit', [OpdController::class, 'edit'])->name('edit-opd');
    Route::get('opd/create', [OpdController::class, 'create'])->name('create-opd');
    Route::post('opd/update', [OpdController::class, 'update'])->name('update-opd');
    Route::post('opd/save', [OpdController::class, 'save'])->name('save-opd');
});
// Route::get('/', [HomeController::class,'index'])->name('frontend');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
