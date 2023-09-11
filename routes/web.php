<?php

use App\Http\Controllers\AntibioticController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChemotherapyController;
use App\Http\Controllers\ParenteralController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'status.valid'])->name('dashboard');

Route::middleware(['auth', 'verified', 'status.valid'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/books", [BookController::class, 'index'])->name("book.index");

    Route::get("/chemotherapy", [ChemotherapyController::class, 'index'])->name("chemotherapy.index");
    Route::get("/parenteral", [ParenteralController::class, 'index'])->name("parenteral.index");
    Route::get("/antibiotic", [AntibioticController::class, 'index'])->name("antibiotic.index");
});

Route::get("/books", [BookController::class, 'index'])->name("book.index");

require __DIR__.'/auth.php';
