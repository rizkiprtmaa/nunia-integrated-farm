<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'pages.welcome')->name('home');

Route::view('about', 'pages.about')->name('about');

Route::view('programs-and-products', 'pages.programs-products')->name('programs-and-products');

Route::view('articles', 'pages.articles')->name('articles');
Route::view('galery-and-testimoni', 'pages.galery-testimoni')->name('galery-and-testimoni');

Route::view('promo-nunia', 'pages.promotion')->name('promotion');

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
