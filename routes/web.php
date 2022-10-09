<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/customers', [\App\Http\Controllers\Customer::class, 'view'])->name('customers');

Route::get('/jobs', [\App\Http\Controllers\Job::class, 'view'])->name('jobs');

require __DIR__.'/auth.php';
