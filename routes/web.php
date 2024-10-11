<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

/* Route::get('/check-db-url', function () {
    $databaseUrl = env('DATABASE_URL');  // Get DATABASE_URL from .env
    Log::info('DATABASE_URL: ' . $databaseUrl);  // Log the value
    return $databaseUrl;  // Optionally return it in the response for visibility
});*/

// DATABASE_URL: postgres://sendnotes_aged_paper_1547:MR3YedB21j7glDs@sendnotes-db.flycast:5432/sendnotes_aged_paper_1547?sslmode=disable
