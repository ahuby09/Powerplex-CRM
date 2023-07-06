<?php

use App\Http\Controllers\companyController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\UserController;
use App\Models\User;

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


Route::middleware("auth")->get('/', [LeadController::class, 'leadDash']);

Route::middleware("auth")->resource('lead', LeadController::class);

Route::middleware("auth")->resource('company', CompanyController::class);
Route::middleware("auth")->resource('user', UserController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/users', function () {
        return view('user.index');
    })->name('user.index');

    Route::prefix('user')->group(function () {
        Route::post('/create-user', [UserController::class, 'createUser'])->name('user.create');
    });
});

Route::get('/users', function () {
    $users = User::all();
    return view('user.index', ['users' => $users]);
})->name('user.index');;
