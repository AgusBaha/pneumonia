<?php

use App\Http\Controllers\pneumonia\BasisKasusController;
use App\Http\Controllers\pneumonia\GejalaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/template', function () {
//     return view('welcome');
// });


Route::get('/dashboard', [HomeController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Gejala
    Route::resource('gejala', GejalaController::class);

    // Basis Kasus
    Route::resource('basiskasus', BasisKasusController::class);
    Route::get('/generate-id-basis', [BasisKasusController::class, 'generateId'])->name('generate.basiskasus');
});

// Authentication routes
require __DIR__ . '/auth.php';
