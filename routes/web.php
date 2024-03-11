<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Home;
use App\Livewire\Shop;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\ProductView;
use App\Livewire\Login;
use App\Livewire\Admin\AddProduct;
use App\Livewire\Admin\Admin;
use App\Livewire\Admin\AddCategory;
use App\Livewire\Admin\AdminCategory;
use App\Livewire\Admin\AdminProduct;
use App\Livewire\Admin\AdminOrders;
use App\Livewire\Admin\AdminChats;
use App\Livewire\Admin\AdminSearch;
use App\Livewire\Admin\AdminSetting;
use App\Livewire\Admin\Customers;
use App\Livewire\Admin\EditCategory;
use App\Livewire\Admin\EditProduct;
use App\Livewire\Admin\ViewCustomer;
use App\Livewire\Admin\ViewOrder;
use App\Livewire\Admin\AdminSlider;
use App\Livewire\Admin\AdminBanner;


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

Route::get('/', Home::class)->name('/');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/about-us', About::class)->name('about-us');
Route::get('/contact-us', Contact::class)->name('contact-us');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/product-view', ProductView::class)->name('product-view');
Route::get('/create-account', Login::class)->name('create-account');



Route::group(['middleware' => ['auth', 'authadmin']], function () {
    // Route::get('/', Admin::class)->name('/');
    Route::get('/products', AdminProduct::class)->name('products');
    Route::get('/add-product', AddProduct::class)->name('add-product');
    Route::get('/edit-product', EditProduct::class)->name('edit-product');
    Route::get('/categories', AdminCategory::class)->name('categories');
    Route::get('/add-category', AddCategory::class)->name('add-category');
    Route::get('/edit-category', EditCategory::class)->name('edit-category');
    Route::get('/orders', AdminOrders::class)->name('orders');
    Route::get('/view-order', ViewOrder::class)->name('view-order');
    Route::get('/customers', Customers::class)->name('customers');
    Route::get('/view-customer', ViewCustomer::class)->name('view-customer');
    Route::get('/chats', AdminChats::class)->name('chats');
    Route::get('/search', AdminSearch::class)->name('admin-search');
    Route::get('/slider', AdminSlider::class)->name('sliders');
    Route::get('/banner', AdminBanner::class)->name('banners');
    Route::get('/create-slider', CreateSlider::class)->name('create-slider');
    
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';