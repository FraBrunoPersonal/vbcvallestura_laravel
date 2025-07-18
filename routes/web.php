<?php

use App\Http\Controllers\WebSiteController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [WebSiteController::class, 'index'])->name('home');
Route::get('/storia', [WebSiteController::class, 'storia'])->name('storia');
Route::get('/direttivo', [WebSiteController::class, 'direttivo'])->name('direttivo');
Route::get('/staff-tecnico', [WebSiteController::class, 'staff_tecnico'])->name('staff-tecnico');
Route::get('/squadre', [WebSiteController::class, 'squadre'])->name('squadre');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
