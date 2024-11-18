<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\Candidate\ProfileController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\Job\Listings;
use Illuminate\Support\Facades\Route;


// Guest Routes
Route::inertia('/', 'Guest/Home')->name('home');
Route::inertia('/about', 'Guest/About')->name('about');
Route::inertia('/jobs', 'Jobs/View')->name('jobs.index');
Route::get('/job/create', [Listings::class, 'create'])->middleware(['auth', 'verified'])->name('jobs.create');


// Email Routes
Route::get('/email/verify', [EmailVerificationController::class, 'notice'])->middleware('auth', 'email')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'handler'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [EmailVerificationController::class, 'resendemail'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// Candidate Routes
Route::middleware(['auth', 'verified', 'candidate'])->prefix('candidate')->group(function () {
    Route::get('/dashboard', fn() => inertia('Candidate/Dashboard'))->name('candidate.dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('candidate.profile');
    Route::post('update/basic', [ProfileController::class, 'storeBasicInfo'])->name('candidate.basic');
    Route::post('update/basic', [ProfileController::class, 'storeAdditionalInfo'])->name('candidate.add');
});


// Employer Routes
Route::middleware(['auth', 'verified', 'employer'])->prefix('employer')->group(function () {
    Route::get('/dashboard', fn() => inertia('Employer/Dashboard'))->name('employer.dashboard');
});











require __DIR__ . '/auth.php';
