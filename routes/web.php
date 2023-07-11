<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Dashboard route
Route::middleware("auth")->get('/', [LeadController::class, 'leadDash']);

// Lead resource routes
Route::middleware("auth")->resource('lead', LeadController::class);
Route::get('/dashboard', [LeadController::class, 'dashboard'])->name('lead.dashboard');
// Company resource routes
Route::middleware("auth")->resource('company', CompanyController::class);

// User resource routes
Route::middleware("auth")->resource('user', UserController::class);

// User creation route
Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('/create-user', [UserController::class, 'createUser'])->name('user.create');
        Route::post('/users', [UserController::class, 'index'])->name('user.index');
    });
});
route::get('/sign-out', [UserController::class, 'signOut'])->name('sign-out');
// Employee routes
Route::middleware("auth")->get('employee', [UserController::class, 'listEmployees'])->name('employees.list');
Route::middleware("auth")->get('employees/{employee}/leads', [UserController::class, 'showLeads'])->name('employees.leads');
