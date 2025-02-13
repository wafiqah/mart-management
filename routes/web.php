<?php

use App\Http\Controllers\Admin\Inventory\ProductController;
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

Route::view('/', 'welcome');

Route::view('admin-dashboard', 'admin-dashboard')->middleware(['auth', 'verified'])->name('admin-dashboard');

Route::get('/inventory/product-list', [ProductController::class, 'ProductMaster'])->middleware(['auth', 'verified'])-> name('product-list');
Route::view('barcode-generator', 'barcode-generator')->middleware(['auth', 'verified'])-> name('barcode-generator');

Route::view('cust-dashboard', 'cust-dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
