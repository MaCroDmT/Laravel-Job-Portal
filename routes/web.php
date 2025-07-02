<?php

//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PublicJobController;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//public job view
Route::get('/jobs', [PublicJobController::class, 'index'])->name('public.jobs.index');
Route::get('/jobs/{job}', [PublicJobController::class, 'show'])->name('public.jobs.show');

// Admin-only routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    // CRUD job routes !
    Route::get('/admin/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/admin/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/admin/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/admin/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/admin/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/admin/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});



Route::get('/', function () {
    return redirect('/login');
});


/*
Route::get('/', function () {
    return view('welcome');
}); */

