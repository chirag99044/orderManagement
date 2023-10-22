<?php
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/orders');

// List all orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    
// Show order details
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

// Create a new order
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Auth::routes();
