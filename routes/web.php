<?php

use App\Http\Controllers\pneumonia\GejalaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala.index');
    Route::get('/gejala/create', [GejalaController::class, 'create'])->name('gejala.create');
    Route::post('/gejala/store', [GejalaController::class, 'store'])->name('gejala.store');
    Route::get('/gejala/{gejala}/edit', [GejalaController::class, 'edit'])->name('gejala.edit');
    Route::put('/gejala/{gejala}', [GejalaController::class, 'update'])->name('gejala.update');
    Route::delete('/gejala/{gejala}', [GejalaController::class, 'destroy'])->name('gejala.destroy');
});

require __DIR__ . '/auth.php';
