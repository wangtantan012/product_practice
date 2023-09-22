<?php

use App\Http\Controllers\FreshcartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\ProfileController;
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
//frontEnd

Route::prefix('/front')->group(function(){
    Route::get('/',[frontController::class,'index'])->name('front.index');
    Route::middleware('auth')->get('/user/inform',[frontController::class,'user_inform'])->name('user.inform');
    Route::middleware('auth')->post('/user/inform/update',[frontController::class,'user_inform_update'])->name('user.inform.update');
});

Route::middleware('auth')->resource('/message', messageController::class);
Route::resource('type',TypeController::class);
Route::middleware('auth')->prefix('/product')->group(function() {
    Route::get('/list', [ProductController::class,'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::POST('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::POST('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::POST('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});

Route::prefix('/freshcart')->group(function() {
    Route::get('/index', [FreshcartController::class, 'index'])->name('freshcart.index');
    Route::get('/address', [FreshcartController::class, 'address'])->name('freshcart.address');
    Route::get('/payment', [FreshcartController::class, 'payment'])->name('freshcart.payment');
    Route::get('/thank', [FreshcartController::class, 'thank'])->name('freshcart.thank');
    Route::get('/store', [FreshcartController::class, 'store'])->name('freshcart.store');

});

Route::get('/', function () {
    return view('welcome');
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
