<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/movies/search', function () {
    $searchQuery = request('q');
    $results = $searchQuery ? Movie::search($searchQuery)->raw(): collect();

   //dd($results);

   $results = collect($results['hits'])->map(function ($result) {
       return $result['document']['title'];
   });

   dd($results);

    return view('movies.search', [
        'searchQuery' => $searchQuery,
        'results' => $results
    ]);
});

require __DIR__.'/auth.php';
