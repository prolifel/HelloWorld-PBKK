<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReportController;
use App\Models\Article;
use App\Models\Order;
use App\Models\Product;

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

Route::get('/',  [FrontController::class, 'index'])->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('reports', ReportController::class);

    Route::get('/whatsapp/{id}', [ReportController::class, 'whatsapp'])->name('whatsapp');

    Route::get('/dashboard', function () {
        $orderNew = Order::where('status', 0)->count();
        $orderConfirm = Order::where('status', 1)->count();
        $orderProcess = Order::where('status', 2)->count();
        $orderShipping = Order::where('status', 3)->count();
        $orderDone = Order::where('status', 4)->count();
        $product = Product::count();


        // dd($orderNew, $orderConfirm, $orderProcess, $orderShipping, $orderDone);
        return view('dashboard.index', [
            'orderNew' => $orderNew,
            'orderConfirm' => $orderConfirm,
            'orderProcess' => $orderProcess,
            'orderShipping' => $orderShipping,
            'orderDone' => $orderDone,
            'product' => $product
        ]);
    })->name('marketplace.dashboard');
});

Route::get('/marketplace', [FrontController::class, 'index'])->name('marketplace.index');
Route::get('/marketplace/product', [FrontController::class, 'product'])->name('marketplace.product');
Route::get('/marketplace/category/{slug}', [FrontController::class, 'categoryProduct'])->name('marketplace.category');
Route::get('/marketplace/product/{slug}', [FrontController::class, 'show'])->name('marketplace.show_product');
Route::post('/marketplace/cart', [CartController::class, 'addToCart'])->name('marketplace.cart');
Route::get('/marketplace/cart', [CartController::class, 'listCart'])->name('marketplace.list_cart');
Route::post('/marketplace/cart/update', [CartController::class, 'updateCart'])->name('marketplace.update_cart');
Route::get('/marketplace/checkout', [CartController::class, 'checkout'])->name('marketplace.checkout');
Route::post('/marketplace/checkout', [CartController::class, 'processCheckout'])->name('marketplace.store_checkout');
Route::get('/marketplace/checkout/{invoice}', [CartController::class, 'checkoutFinish'])->name('marketplace.finish_checkout');

Route::get('/marketplace/orders/{invoice}', [OrderController::class, 'view'])->name('customer.view_order');

require __DIR__.'/auth.php';

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');

Route::get('/pariwisata', function () {
    return view('potensi.pariwisata.index');
})->name('pariwisata');

Route::get('/pertanian', function () {
    return view('potensi.pertanian.index');
})->name('pertanian');

Route::get('/perikanan', function () {
    return view('potensi.perikanan.index');
})->name('perikanan');
