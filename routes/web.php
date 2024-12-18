<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\HomeDetail;
use App\Livewire\Homes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(callback: function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/homes', Homes::class)->name('homes.index');
    Route::get('/dashboard/homes/{home:id}', HomeDetail::class)->name('homes.detail');
});

require __DIR__.'/auth.php';
