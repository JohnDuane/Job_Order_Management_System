<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    // Authentication Role Based ni bai
    Route::get('/dashboard', function () {
        return match (auth()->user()->role) {
            'admin' => redirect()->route('admin.dashboard'),
            'supervisor' => redirect()->route('supervisor.dashboard'),
            'mechanic' => redirect()->route('mechanic.dashboard'),
            default => abort(403),
        };
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth', 'verified', 'role:admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');

            Route::get('/users/create', function () {
                return view('admin.users.create');
            })->name('users.create');

            Route::post('/users', [UserController::class, 'store'])
             ->name('users.store');
        });


    Route::middleware(['auth', 'verified', 'role:supervisor'])
        ->prefix('supervisor')
        ->name('supervisor.')
        ->group(function () {
            Route::get('/dashboard', function () {
                return view('supervisor.dashboard');
            })->name('dashboard');
        });

    Route::middleware(['auth', 'verified', 'role:mechanic'])
        ->prefix('mechanic')
        ->name('mechanic.')
        ->group(function () {
            Route::get('/dashboard', function () {
                return view('mechanic.dashboard');
            })->name('dashboard');
        });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
