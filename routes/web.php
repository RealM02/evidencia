<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\order_detailsController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clients',[clientsController::class, 'index']);
Route::get('/staff',[staffController::class, 'staff']);
Route::get('/products',[productsController::class, 'products']);
Route::get('/order',[orderController::class, 'orders']);
Route::get('/order_details',[order_detailsController::class, 'detail']);