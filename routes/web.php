<?php

use App\Http\Controllers\BidController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function() {
    Route::get('/bid/form', [BidController::class, 'create'])->name('bid.form');

    Route::post("/bid/store", [BidController::class, 'store'])->name('bid.store');

    Route::get("/bid", [BidController::class, "index"])->name('bid');
});

require __DIR__.'/auth.php';
