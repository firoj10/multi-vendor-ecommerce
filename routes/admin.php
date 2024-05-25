<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

// admin routes........................
Route::get('dashboard',[AdminController::class, 'dashboard'])->middleware(['auth', 'role:admin'])->name('dashboard');
// Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');
Route::get('profile',[ProfileController::class, 'index'])->name('profile');
Route::post('profile/update',[ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password',[ProfileController::class, 'updatePassword'])->name('password.update');