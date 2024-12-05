<?php

use App\Http\Controllers\Admin\AdminHome;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Candidate\ProfileController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\Employer\Dashboard;
use App\Http\Controllers\Employer\JobListingController;
use App\Http\Controllers\Guest\PageHandlerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Candidate\BookmarkController;
use App\Http\Controllers\ListingController;



// Admin Routes
Route::get('/admin/dashboard', [AdminHome::class, 'index'])->name('admin.dashboard');
Route::get('/admin/job/categories', [AdminHome::class, 'categories'])->name('admin.categories');
Route::post('/admin/job/categories', [AdminHome::class, 'addCategories']);
Route::get('/admin/users', [AdminHome::class, 'index'])->name('admin.users');


// Guest Routes
Route::get('/', [PageHandlerController::class, 'homeVue'])->name('home');
Route::inertia('/about', 'Guest/About')->name('about');
Route::inertia('/contact', 'Guest/Contact')->name('contact');
Route::inertia('/blog', 'Guest/Blog')->name('blog');
Route::get('/guest/jobs', [ListingController::class, 'showGuestAllListing'])->name('guest.listings');
Route::get('/guest/job/{listing}', [ListingController::class, 'showGuestListing'])->name('guest.listing.show');


// Email Routes
Route::get('/email/verify', [EmailVerificationController::class, 'notice'])->middleware('auth', 'email')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'handler'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [EmailVerificationController::class, 'resendemail'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::post('apply/job/{listing}', [ApplicationController::class, 'applyListing'])->name('apply');

// Candidate Routes
Route::middleware(['auth', 'verified', 'candidate'])->prefix('candidate')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'candidateDashboard'])->name('candidate.dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('candidate.profile');
    Route::post('update/basic', [ProfileController::class, 'storeBasicInfo'])->name('candidate.basic');
    Route::post('update/basic', [ProfileController::class, 'storeAdditionalInfo'])->name('candidate.add');
});

Route::post('/bookmark', [BookmarkController::class, 'toggle'])->name('bookmark.toggle');

Route::get('/user/bookmarks', [BookmarkController::class, 'aaa'])->name('user.bookmarks');

// Employer Routes
Route::middleware(['auth', 'verified', 'employer'])->prefix('employer')->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('employer.dashboard');
    Route::get('/listings', [ListingController::class, 'index'])->name('employer.dashboard');
});

Route::middleware(['auth', 'verified', 'employer'])
    ->prefix('employer')
    ->name('employer.')
    ->group(function () {});












require __DIR__ . '/auth.php';
