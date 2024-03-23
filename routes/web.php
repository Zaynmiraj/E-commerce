<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EditController;
use App\Livewire\Home;
use App\Livewire\Shop;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\ProductView;
use App\Livewire\Login;
use App\Livewire\Signup;
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
use App\Livewire\Admin\CreateSlider;
use App\Livewire\Admin\Sponsers;
use App\Livewire\Admin\Gateways;
use App\Livewire\Admin\Menus;
use App\Livewire\Admin\Notifications;
use App\Livewire\Admin\ShopDetails;
use App\Livewire\Admin\Social;
use App\Livewire\Admin\SmtpMail;
use App\Livewire\Admin\GeneralSettings;
use App\Livewire\Admin\AdminBlog;
use App\Livewire\Wishlists;
use App\Livewire\Blogs;
use App\Livewire\ThankYou;




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
Route::get('/wishlist', Wishlists::class)->name('wishlist');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/product-view/{slug}', ProductView::class)->name('product-view');
Route::get('/create-account', Login::class)->name('create-account');
Route::get('/signup', Signup::class)->name('signup');
Route::get('/blog', Blogs::class)->name('blog');
Route::get('/thank-you/{id}', ThankYou::class)->name('thank-you');


Route::group(['middleware' => ['auth', 'authadmin']], function () {
    // Route::get('/', Admin::class)->name('/');
    Route::get('/products', AdminProduct::class)->name('products');
    Route::get('/add-product', AddProduct::class)->name('add-product');
    Route::get('/edit-product', EditProduct::class)->name('edit-product');
    Route::get('/categories', AdminCategory::class)->name('categories');
    Route::get('/add-category', AddCategory::class)->name('add-category');
    Route::get('/orders', AdminOrders::class)->name('orders');
    Route::get('/view-order', ViewOrder::class)->name('view-order');
    Route::get('/customers', Customers::class)->name('customers');
    Route::get('/view-customer', ViewCustomer::class)->name('view-customer');
    Route::get('/chats', AdminChats::class)->name('chats');
    Route::get('/search', AdminSearch::class)->name('admin-search');
    Route::get('/slider', AdminSlider::class)->name('sliders');
    Route::get('/banner', AdminBanner::class)->name('banners');
    Route::get('/create-slider', CreateSlider::class)->name('create-slider');

    //Sponsor routes
    Route::get('/sponsors', Sponsers::class)->name('sponsors');

    //Setting routes 

    Route::get('/gateways', Gateways::class)->name('gateways');
    Route::get('/menus', Menus::class)->name('menus');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/shop-details', ShopDetails::class)->name('shop-details');
    Route::get('/social-links', Social::class)->name('social-links');
    Route::get('/smtp-mail', SmtpMail::class)->name('smtp-mail');
    Route::get('/general-setting', GeneralSettings::class)->name('general-setting');
    Route::get('/admin-blog', AdminBlog::class)->name('admin-blog');



    //Edit items route 
    //Author zayn miraj
    Route::get('/edit-category/{id}', [EditController::class, 'EditCategory'])->name('edit-category');
    Route::post('/update-category', [EditController::class, 'UpdateCategory'])->name('update-category');
    Route::get('/edit-sponsor/{id}', [EditController::class, 'EditSponsor'])->name('edit-sponsor');
    Route::post('/update-sponsor', [EditController::class, 'UpdateSponsor'])->name('update-sponsor');
    Route::get('/edit-slider/{id}', [EditController::class, 'EditSlider'])->name('edit-slider');
    Route::post('/update-slider', [EditController::class, 'UpdateSlider'])->name('update-slider');
    Route::get('/edit-banner/{id}', [EditController::class, 'EditBanner'])->name('edit-banner');
    Route::post('/update-banner', [EditController::class, 'UpdateBanner'])->name('update-banner');
    Route::get('/edit-gateway/{id}', [EditController::class, 'EditGateway'])->name('edit-gateway');
    Route::post('/update-gateway', [EditController::class, 'UpdateGateway'])->name('update-gateway');
    Route::get('/edit-menu/{id}', [EditController::class, 'EditMenu'])->name('edit-menu');
    Route::post('/update-menu', [EditController::class, 'UpdateMenu'])->name('update-menu');
    Route::post('/add-menu-item', [EditController::class, 'addMenuItems'])->name('add-menu-item');
    Route::get('/edit-menu-item/{id}', [EditController::class, 'EditMenuItem'])->name('edit-menu-item');
    Route::post('/update-menu-item', [EditController::class, 'UpdateMenuItem'])->name('update-menu-item');
    Route::post('/test-mail', [EditController::class, 'TestMail'])->name('test-mail');
    Route::get('/edit-link/{id}', [EditController::class, 'EditLink'])->name('edit-link');
    Route::post('/update-link', [EditController::class, 'UpdateLink'])->name('update-link');
    Route::get('/edit-blog/{id}', [EditController::class, 'EditBlog'])->name('edit-blog');
    Route::post('/update-blog', [EditController::class, 'UpdateBlog'])->name('update-blog');

    
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';