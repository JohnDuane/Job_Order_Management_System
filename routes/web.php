<?php

use App\Models\Customer;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\ServiceController;
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

            //DASHBOARD
            Route::get('/users/create', function () {
                return view('admin.users.create');
            })->name('users.create');

            //ADDCUSTOMER
            Route::get('/users/addcustomer', [CustomerController::class, 'create'])
                ->name('users.addcustomer');

            Route::post('/users/addcustomer', [CustomerController::class, 'store'])
                ->name('users.addcustomer.store');

            //READCUSTOMER
            Route::get('/customers', [CustomerController::class, 'index'])
                ->name('customers');

            //UPDATECUSTOMER
            Route::put('/customers/{customer}', [CustomerController::class, 'update'])
                ->name('customers.update');

            //DELETECUSTOMER
            Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])
                ->name('customers.destroy');


            //ADDVEHICLE
            Route::get('/users/addvehicles', [VehicleController::class, 'create'])
                ->name('users.addvehicles');

            Route::post('/users/addvehicles', [VehicleController::class, 'store'])
                ->name('users.addvehicles.store');

            //READVEHICLE
            Route::get('/vehicles', [VehicleController::class, 'index'])
                ->name('vehicles');

            //UPDATEVEHICLE
            Route::put('/vehicles/{vehicle}', [VehicleController::class, 'update'])
                ->name('vehicles.update');

            //DELETEVEHICLE
            Route::delete('/vehicles/{vehicle}', [VehicleController::class, 'destroy'])
                ->name('vehicles.destroy');



            Route::post('/users', [UserController::class, 'store'])
             ->name('users.store');

            
            //sidenav
            Route::get('/customers', [CustomerController::class, 'index'])
                ->name('customers');

            

            //READSTAFF
            Route::get('/staff', [UserController::class, 'index'])
                ->name('staff');

            //UPDATESTAFF
            Route::put('/staff/{user}', [UserController::class, 'update'])
                ->name('staff.update');

            //DELETESTAFF
            Route::delete('/staff/{user}', [UserController::class, 'destroy'])
                ->name('staff.destroy');


            Route::get('/job-orders', function () {
                return view('admin.job-orders');
            })->name('job-orders');


            // READSERVICES
            Route::get('/services', [ServiceController::class, 'index'])
                ->name('services');


            // ADDSERVICE
            Route::get('/users/addservices', [ServiceController::class, 'create'])
                ->name('users.addservices');

            Route::post('/services', [ServiceController::class, 'store'])
                ->name('services.store');


            // UPDATE SERVICE
            Route::put('/services/{service}', [ServiceController::class, 'update'])
                ->name('services.update');

                
            // DELETE SERVICE
            Route::delete('/services/{service}', [ServiceController::class, 'destroy'])
                ->name('services.destroy');
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


            Route::get('/MJO', function () {
                return view('mechanic.MJO');
            })->name('MJO');

            Route::get('/CJO', function () {
                return view('mechanic.CJO');
            })->name('CJO');

            Route::get('/needs-revision', function () {
                return view('mechanic.needs-revision');
            })->name('needs-revision');


        });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
