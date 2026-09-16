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

            
            Route::get('/customers', function () {
                return view('admin.customers');
            })->name('customers');

            Route::get('/vehicles', function () {
                return view('admin.vehicles');
            })->name('vehicles');

            Route::get('/staff', function () {
                return view('admin.staff');
            })->name('staff');

            Route::get('/job-orders', function () {
                return view('admin.job-orders');
            })->name('job-orders');

            Route::get('/services', function () {
                return view('admin.services');
            })->name('services');
        });


    Route::middleware(['auth', 'verified', 'role:supervisor'])
        ->prefix('supervisor')
        ->name('supervisor.')
        ->group(function () {
            Route::get('/dashboard', function () {
                return view('supervisor.dashboard');
            })->name('dashboard');



            Route::get('/pending-approvals', function () {
                return view('supervisor.pending-approvals');
            })->name('pending-approvals');

            Route::get('/AJO', function () {
                return view('supervisor.AJO');
            })->name('AJO');

            Route::get('/assign-mechanic', function () {
                return view('supervisor.assign-mechanic');
            })->name('assign-mechanic');

            Route::get('/approval-history', function () {
                return view('supervisor.approval-history');
            })->name('approval-history');

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
