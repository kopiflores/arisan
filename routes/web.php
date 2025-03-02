<?php

use App\Http\Controllers\ArisanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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

// Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
//     Route::post('/arisans', [ArisanController::class, 'store']);
// });

// Route::get('/', function () {
//     return view('app');
// });


// Route::post('/login', [AuthController::class, 'login']);


// Route::middleware('auth::sanctum')->group(function () {
//     Route::post('/arisans', [ArisanController::class], 'store');
//     Route::post('/arisans/{id}/members', [ArisanController::class], 'addMember');
//     Route::post('/payments', [PaymentController::class], 'store');
//     Route::post('/payments/{id}/validate', [PaymentController::class], 'store');
// });

// Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
//     Route::post('/arisans', [ArisanController::class, 'store']);
// });
