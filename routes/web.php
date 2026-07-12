<?php

use App\Http\Controllers\Admin\TokenController as AdminTokenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

/* Public routes */
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/packages', 'packages')->name('packages');
Route::view('/contact', 'contact')->name('contact');
Route::view('/book-appointment', 'book-appointment')->name('book-appointment');

Route::get('/op-token', [TokenController::class, 'index'])->name('tokens.index');
Route::post('/op-token', [TokenController::class, 'store'])->name('tokens.store');
Route::get('/op-token/{token}/status', [TokenController::class, 'status'])->name('tokens.status');

/* Authenticated routes */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('medicines', MedicineController::class);
    Route::resource('sales', SaleController::class);

    Route::get('/admin/tokens', [AdminTokenController::class, 'index'])->name('admin.tokens.index');
    Route::post('/admin/tokens/departments/{department}/call-next', [AdminTokenController::class, 'callNext'])->name('admin.tokens.call-next');
    Route::patch('/admin/tokens/{token}/status', [AdminTokenController::class, 'updateStatus'])->name('admin.tokens.update-status');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
