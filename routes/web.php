<?php

use Illuminate\Support\Facades\Route;
use App\Models\clients;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\products;
use App\Models\staff;

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