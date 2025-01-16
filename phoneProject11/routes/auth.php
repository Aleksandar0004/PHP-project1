<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;

// Login Routes
Route::get('login', [AuthenticatedSessionController::class, 'create'])
             ->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
             ->name('logout');

// Registration Routes
Route::get('register', [RegisteredUserController::class, 'create'])
             ->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

// Password Reset Routes
Route::get('forgot-password', [PasswordController::class, 'request'])
             ->name('password.request');
Route::post('forgot-password', [PasswordController::class, 'email'])
             ->name('password.email');
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
             ->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])
             ->name('password.update');

// Email Verification Routes
Route::get('email/verify', [EmailVerificationPromptController::class, '__invoke'])
             ->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
             ->name('verification.verify');
Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
             ->name('verification.send');

// Password Confirmation Routes
Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
             ->name('password.confirm');
Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
