<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountDeletionController;
use App\Http\Controllers\PasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/update-profile', function () {
    return view('auth.update-profile');
})->name('update.profile');

Route::get('/change-password', PasswordController::class)->name('change.password');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/account-delete', [AccountDeletionController::class, 'index'])->name('account.delete');
Route::post('/account-destroy', [AccountDeletionController::class, 'destroy'])->name('account.destroy');
