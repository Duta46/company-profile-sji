<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/class-list', [HomeController::class, 'classlist'])->name('class-list');

Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/change-password', [ProfileController::class, 'change_password'])->name('changePassword');
    Route::post('/update-password', [ProfileController::class, 'update_password'])->name('updatePassword');

    Route::resource('Testimoni', TestimoniController::class);

    Route::resource('Partner', PartnerController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});
