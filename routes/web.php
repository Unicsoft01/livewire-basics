<?php

use App\Livewire\Home\Welcome;
use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    // route for testpage
Route::get('/testpage', TestPage::class)->name('testpage');
// Route::get('/', Welcome::class)->name('welcome');

require __DIR__.'/auth.php';
