<?php

use App\Http\Controllers\InventoryController;

Route::get('/', [InventoryController::class, 'index']);
Route::get('/inventory/create', [InventoryController::class, 'create']);
Route::post('/inventory/store', [InventoryController::class, 'store']);
Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit']);
Route::post('/inventory/update/{id}', [InventoryController::class, 'update']);
Route::get('/inventory/delete/{id}', [InventoryController::class, 'destroy']);
Route::get('/inventory/use/{id}', [InventoryController::class, 'useForm']);
Route::post('/inventory/use/{id}', [InventoryController::class, 'use']);
Route::get('/inventory/add-stock/{id}', [InventoryController::class, 'addStockForm']);
Route::post('/inventory/add-stock/{id}', [InventoryController::class, 'addStock']);