<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategory;
use App\Http\Controllers\Admin\ProductController as AdminProduct;
use App\Http\Controllers\Admin\OrderController as AdminOrder;
use App\Http\Controllers\Admin\CustomerController as AdminCustomer;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DiscographyController;
use App\Http\Controllers\FanClubController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\MusicStoreController;

use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TheBandController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'home'])->name('home.front');
Route::get('/discography', [DiscographyController::class, 'index'])->name('discography.front');
Route::get('/fan-club', [FanClubController::class, 'index'])->name('fan-club.front');
Route::get('/media', [MediaController::class, 'index'])->name('media.front');
Route::get('/merch', [MerchController::class, 'index'])->name('merch.front');
Route::get('/product-detail/{id}', [MerchController::class, 'detail'])->name('merch.detail.front');
Route::get('/music-store', [MusicStoreController::class, 'index'])->name('music-store.front');
Route::get('/the-band', [TheBandController::class, 'index'])->name('the-band.front');
Route::get('/cart', [CartController::class, 'index'])->name('cart.front');
Route::post('/cart-add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart-update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart-delete', [CartController::class, 'deleteCart'])->name('cart.delete');
Route::get('/cart/count', function () {
    return count(session('cart'));
})->name('cart.count');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.front');
Route::post('/checkout/form', [CheckoutController::class, 'checkoutForm'])->name('checkout.form.front');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.front');
Route::post('/payment/form', [PaymentController::class, 'paymentForm'])->name('payment.cart.form');
Route::get('/upgrade/checkout/{status}', [PaymentController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/upgrade/cancel', [PaymentController::class, 'checkoutCancel'])->name('checkout.cancel');
Route::get('/thankyou', [PaymentController::class, 'thankyou'])->name('thankyou');



Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login/form', [loginController::class, 'loginForm'])->name('login.form');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
    //Category Crud
    Route::get('/categories-list', [AdminCategory::class, 'index'])->name('admin.categories');
    Route::get('/add-category', [AdminCategory::class, 'create'])->name('admin.create.category');
    Route::get('/edit-category/{id}', [AdminCategory::class, 'edit'])->name('admin.category.edit');
    Route::post('/update-category/{id}', [AdminCategory::class, 'update'])->name('admin.update.category');
    Route::post('/add-category/form', [AdminCategory::class, 'store'])->name('admin.store.category');
    Route::get('/destroy-category/{id}', [AdminCategory::class, 'destroy'])->name('admin.category.destroy');


    Route::get('/product-list/{category?}', [AdminProduct::class, 'index'])->name('admin.product');
    Route::get('/add-product', [AdminProduct::class, 'create'])->name('admin.create.product');
    Route::post('/store-product', [AdminProduct::class, 'store'])->name('admin.store.product');
    Route::get('/edit-product/{id}', [AdminProduct::class, 'edit'])->name('admin.edit.product');
    Route::post('/update-product/{id}', [AdminProduct::class, 'update'])->name('admin.update.product');
    Route::post('/update-product-status/{id}', [AdminProduct::class, 'updateStatus'])->name('admin.update.status');
    Route::get('/destroy-product-status/{id}', [AdminProduct::class, 'delete'])->name('admin.product.destroy');


    Route::get('/order-list', [AdminOrder::class, 'index'])->name('admin.order');
    Route::get('/order-detail', [AdminOrder::class, 'detail'])->name('admin.order.detail');
    Route::get('/order-invoice', [AdminOrder::class, 'invoice'])->name('admin.order.invoice');
    Route::get('/customer-list', [AdminCustomer::class, 'index'])->name('admin.customer');
    Route::get('/customer-detail', [AdminCustomer::class, 'detail'])->name('admin.customer.detail');


    Route::get('/logout', [loginController::class, 'logout'])->name('admin.logout');

});

