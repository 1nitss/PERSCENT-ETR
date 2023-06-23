<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
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

Route::get('/welcome', function () {
    return view('index');
});
//user-login
Route::get('/user-login', function () {
    return view('user-login');
});

Route::post('user-login',[PerScentController::class, 'login']);

//user-register
Route::get('/user-register', function () {
    return view('user-register');
});

Route::post('user-register',[PerScentController::class, 'register']);

Auth::routes();
//logout
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//about us
Route::get('/about', function () {
    return view('aboutus-index');
});

//order perfume with quantity
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/form',[OrderController::class, 'create'])->name('order.form');

//show orders of user
Route::get('/user-orders', [OrderController::class, 'showOrders'])->name('user.orders');
// Route::get('/user-orders', 'OrderController@showOrders')->name('user.orders');

//show favorites
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');


//add favorites
Route::post('/favorites', [FavoriteController::class, 'store'])->name('favorites.store');

//search
Route::get('/search', [HomeController::class, 'search'])->name('search');

//product_desc
Route::get('/product/product-desc',[ProductDescController::class, 'create'])->name('product.desc');
//comment
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

//admin-dashboard
Route::get('/dashboard', function () {
    // Calculate the sum of total_price for each month
    $monthlySales = DB::table('orders')
        ->select(DB::raw('DATE_FORMAT(created_at, "%M") as month'), DB::raw('SUM(total_price) as sum_total_price'))
        ->groupBy('month')
        ->pluck('sum_total_price', 'month');

    // Calculate the sum of quantities for each product
    $productCounts = DB::table('orders')
        ->select('product_name', DB::raw('SUM(quantity) as sum_quantity'))
        ->groupBy('product_name')
        ->pluck('sum_quantity', 'product_name');

    return view('admin.dashboard', compact('monthlySales', 'productCounts'));
});

//manage product
Route::get('/manage-product', function () {
    $products = DB::table('perfume_products')
    ->orderBy('id', 'desc')
    ->get();
    return view('admin.manage-product', ['products' => $products]);
});

//update product
Route::get('/manage-product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/manage-product/{id}/update', [ProductController::class, 'update'])->name('product.update');

//delete product
Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');

//add product
Route::get('/add-product', function () {
    return view('admin.add-product');
});
Route::post('/product/add', [ProductController::class, 'add'])->name('product.add');


//view orders
Route::get('/view-orders', function () {
    $orders = DB::table('orders')
        ->orderBy('id', 'desc')
        ->get();

    return view('admin.view-orders', ['orders' => $orders]);
});