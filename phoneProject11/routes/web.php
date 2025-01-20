<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Phone;
use App\Models\Store;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('phone/{id}/edit', [AdminController::class, 'editPhone'])->name('admin.editPhone');
    Route::put('phone/{id}', [AdminController::class, 'updatePhone']);
    Route::delete('phone/{id}', [AdminController::class, 'deletePhone']);
});


Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);


Route::resource('phones', PhoneController::class);
Route::resource('stores', StoreController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); 


Route::get('/', function () {
    $phones = Phone::latest()->take(6)->get(); 
    $stores = Store::latest()->take(3)->get(); 

    return view('welcome', compact('phones', 'stores')); 
});
