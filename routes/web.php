<?php

use App\Models\Equipment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\InterventionsController;
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\StockController;

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

Route::get('/', function () {
    $equipments = Equipment::all()->count();
    return view('welcome', compact('equipments'));
})->middleware(['auth'])->name('welcome');

Route::get('/dashboard', function () {
    $equipments = Equipment::all()->count();
    return view('dashboard', compact('equipments'));
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => 'equipments'], function () {
    // Routes pour les équipements
    Route::get('/', [EquipmentController::class, 'index']);
    Route::post('/', [EquipmentController::class, 'store']);
    Route::get('/{id}', [EquipmentController::class, 'show']);
    Route::put('/{id}', [EquipmentController::class, 'update']);
    Route::delete('//{id}', [EquipmentController::class, 'destroy']);
});

Route::group(['prefix' => 'stock'], function () {
    // Routes pour le stock
    Route::get('/', [StockController::class, 'index']);
    Route::post('/', [StockController::class, 'store']);
    Route::get('/{id}', [StockController::class, 'show']);
    Route::put('/{id}', [StockController::class, 'update']);
    Route::delete('/{id}', [StockController::class, 'destroy']);
});

Route::group(['prefix' => 'ressources'], function () {
    // Routes pour les ressources
    Route::get('/', [RessourceController::class, 'index']);
    Route::post('/', [RessourceController::class, 'store']);
    Route::get('/{id}', [RessourceController::class, 'show']);
    Route::put('/{id}', [RessourceController::class, 'update']);
    Route::delete('/{id}', [RessourceController::class, 'destroy']);
});

Route::group(['prefix' => 'interventions'], function () {
    // Routes pour les interventions
    Route::get('/', [InterventionsController::class, 'index']);
    Route::post('/', [InterventionsController::class, 'store']);
    Route::get('/{id}', [InterventionsController::class, 'show']);
    Route::put('/{id}', [InterventionsController::class, 'update']);
    Route::delete('/{id}', [InterventionsController::class, 'destroy']);
});

Route::group(['prefix' => 'help'], function () {
    // Routes pour l'aide
    Route::get('/', [HelpController::class, 'index']);
    Route::post('', [HelpController::class, 'store']);
    Route::get('/{id}', [HelpController::class, 'show']);
    Route::put('/{id}', [HelpController::class, 'update']);
    Route::delete('/{id}', [HelpController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
