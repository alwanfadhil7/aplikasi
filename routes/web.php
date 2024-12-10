<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {
    return view('welcome');
});

// Home Controller Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/users', [HomeController::class, 'store'])->name('home.store');
Route::get('/users/{user}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/users/{user}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/users/{user}', [HomeController::class, 'destroy'])->name('home.destroy');

// Dashboard Route
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Auth Confirm Password Controller Routes
Route::get('/password/confirm', [ConfirmPasswordController::class, 'showConfirmPasswordForm'])->name('password.confirm');
Route::post('/password/confirm', [ConfirmPasswordController::class, 'confirm'])->name('password.confirm');

// Auth Forgot Password Controller Routes
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Auth Login Controller Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Auth Register Controller Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Auth Reset Password Controller Routes
Route::get('/password/reset', [ResetPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail']);
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset']);

// Auth Verification Controller Routes
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
