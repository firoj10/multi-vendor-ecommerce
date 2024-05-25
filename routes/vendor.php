<?php
use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

// vendor routes........................

// Route::get('vendor/dashboard',[VendorController::class, 'dashboard'])->middleware(['auth', 'role:vendor'])->name('vendor.dashboard');
Route::get('dashboard',[VendorController::class, 'dashboard'])->middleware(['auth', 'role:vendor'])->name('dashboard');