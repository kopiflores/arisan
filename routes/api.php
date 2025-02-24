<?php

use App\Http\Controllers\ArisanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth::sanctum')->group(function () {
    Route::post('/arisans', [ArisanController::class], 'store');
    Route::post('/arisans/{id}/members', [ArisanController::class], 'addMember');
    Route::post('/payments', [PaymentController::class], 'store');
    Route::post('/payments/{id}/validate', [PaymentController::class], 'store');
});

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::post('/arisans', [ArisanController::class, 'store']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
