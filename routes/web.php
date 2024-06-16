<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\AboutusController;

Route::get('/', function () {
    return view('frontend/index');
});


Route::get('/base', function () {
    return view('frontend/base');
});




Route::get('/dashboard', function () {
    return view('backend/dashboard');
})->middleware(['auth', 'verified'])->name('/backend/dashboard');

Route::get('/logo', [DashController::class, 'slider'])->name('slider');
Route::get('/services', [DashController::class, 'services'])->name('services');

Route::get('/aboutus', [AboutusController::class, 'create'])->name('aboutus.create');
Route::post('/aboutus', [AboutusController::class, 'store'])->name('aboutus.store');



Route::get('/sitesettings', [DashController::class, 'sitesettings'])->name('sitesettings');
Route::get('/persons', [DashController::class, 'bpersons'])->name('bpersons');
Route::get('/blog', [DashController::class, 'bblog'])->name('bblog');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
