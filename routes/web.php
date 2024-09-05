<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Produk;
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

Route::middleware('statusLogin')->group(function() {
});
Route::get('/', [UserController::class, 'showLoginOptions'])->name('login.options');
// Route::get('/', [UserController::class, 'log']);
Route::get('/logn', [UserController::class, 'loginuser']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/auth', [UserController::class,'auth']);
// Route::get('/home', [UserController::class,'index']);
Route::get('/hom', [UserController::class,'hm']);
Route::get('/home', [ProdukController::class,'index']);
Route::get('/dsh', [ProdukController::class,'index']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/lp', [ProdukController::class, 'produk']);
Route::get('/pesanan', [ProdukController::class, 'store']);
Route::get('/setting', [ProdukController::class, 'seting']);
Route::get('/gundam', [ProdukController::class, 'gundam'])->name('gundam');
Route::get('/shop', [ProdukController::class, 'shop']);
Route::resource('produk', ProdukController::class);
Route::get('/pesanan', [ProdukController::class, 'psn']);
Route::get('/regis', [UserController::class, 'register']);


// Route::get('/login/buyer', [UserController::class, 'showBuyerLoginForm'])->name('login.buyer');
// Route::get('/login/seller', [UserController::class, 'showSellerLoginForm'])->name('login.seller');





