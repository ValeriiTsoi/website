<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', fn () => redirect('/en'));

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'en|uk|es|ru'],
    'middleware' => 'setLocale',
], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/projects', [PageController::class, 'projects'])->name('projects');
    Route::get('/hobby', [PageController::class, 'hobby'])->name('hobby');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
});
