<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home-page', function () {
    return view('pages.home');
});
Route::get('/products', function () {
    return view('pages.product_create');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/products', ProductController::class);

Route::get('/transactions', [SaleController::class, 'transaction'])->name('transaction');
Route::post('/add-item', [SaleController::class, 'addItemOnSession'])->name('addItem');
Route::post('/update-item', [SaleController::class, 'updateItemOnSession'])->name('updateItem');
Route::get('/delete-item/{id}', [SaleController::class, 'deleteItemOnSession'])->name('deleteItem');
Route::post('/orders', [SaleController::class, 'order'])->name('order');
