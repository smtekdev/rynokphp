<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Hash;

Route::get("/",[HomeController::class,"index"]);

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::post("/addwishlist/{id}",[HomeController::class,"addwishlist"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/showwishlist/{id}",[HomeController::class,"showwishlist"]);

// Route::get("/remove/{id}",[HomeController::class,"remove"]);
Route::match(['get', 'post'], '/remove/{id}', [HomeController::class, 'remove']);

Route::match(['get', 'post'], '/remove2/{id}', [HomeController::class, 'remove2']);

Route::match(['get', 'post'], '/productdelete/{id}', [VendorController::class, 'productdelete']);


Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');

Route::get("/products",[VendorController::class,"products"]);
Route::post("/uploadproducts",[VendorController::class,"upload"]);

// New added vendor routes

Route::get("/vendor_products",[VendorController::class,"vendor_products"]);

Route::get('/vendor', [VendorController::class, 'index']);

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/deletemenu/{id}",[VendorController::class,"deletemenu"]);

Route::get("/updateview/{id}",[VendorController::class,"updateview"]);
Route::post("/update/{id}",[VendorController::class,"update"]);

route::get('/aromatherapy', [HomeController::class, 'aromatherapy'])->name('aromatherapy');
route::get('/automotive', [HomeController::class, 'automotive'])->name('automotive');
route::get('/beauty-&-spa', [HomeController::class, 'beauty_and_spa'])->name('beauty-&-spa');
route::get('/ben-haul', [HomeController::class, 'ben_haul'])->name('ben-haul');
route::get('/buying-&-selling', [HomeController::class, 'buying_and_selling'])->name('buying-&-selling');
route::get('/carter-grayson', [HomeController::class, 'carter_grayson'])->name('carter-grayson');
route::get('/chicagoland-counselors', [HomeController::class, 'chicagoland_counselors'])->name('chicagoland-counselors');
route::get('/clothing', [HomeController::class, 'clothing'])->name('clothing');
route::get('/commando-machine', [HomeController::class, 'commando_machine'])->name('commando-machine');
route::get('/costco-promo-code', [HomeController::class, 'costco_promo_code'])->name('costco-promo-code');
route::get('/crosstown-fitness-classes', [HomeController::class, 'crosstown_fitness_classes'])->name('crosstown-fitness-classes');
route::get('/dance-&-sip-fitness-session', [HomeController::class, 'dance_and_sip_fitness_session'])->name('dance-&-sip-fitness-session');
route::get('/dance-sessions', [HomeController::class, 'dance_sessions'])->name('dance-sessions');
route::get('/department-stores', [HomeController::class, 'department_stores'])->name('department-stores');
route::get('/digital-world', [HomeController::class, 'digital_world'])->name('digital-world');
route::get('/discount-coupon', [HomeController::class, 'discount_coupon'])->name('discount-coupon');
route::get('/fashion', [HomeController::class, 'fashion'])->name('fashion');
route::get('/fitness-classes', [HomeController::class, 'fitness_classes'])->name('fitness-classes');
route::get('/food-&-drink', [HomeController::class, 'food_and_drink'])->name('food-&-drink');
route::get('/fun-&-entertainment', [HomeController::class, 'fun_and_entertainment'])->name('fun-&-entertainment');
route::get('/furniture-&-home-decor', [HomeController::class, 'furniture_and_home_decor'])->name('furniture-&-home-decor');
route::get('/harry-donald', [HomeController::class, 'harry_donald'])->name('harry-donald');
route::get('/headband-foldable', [HomeController::class, 'headband_foldable'])->name('headband-foldable');
route::get('/health-&-beauty', [HomeController::class, 'health_and_beauty'])->name('health-&-beauty');
route::get('/health-&-fitness', [HomeController::class, 'health_and_fitness'])->name('health-&-fitness');
route::get('/home-appliances-coupons', [HomeController::class, 'home_appliances_coupons'])->name('home-appliances-coupons');
route::get('/home-appliances', [HomeController::class, 'home_appliances'])->name('home-appliances');
route::get('/home-services', [HomeController::class, 'home_services'])->name('home-services');
route::get('/hotels-&-travels', [HomeController::class, 'hotels_and_travels'])->name('hotels-&-travels');
route::get('/james-lincoln', [HomeController::class, 'james_lincoln'])->name('james-lincoln');
route::get('/john-ceamus', [HomeController::class, 'john_ceamus'])->name('john-ceamus');
route::get('/kids-entertainment', [HomeController::class, 'kids_entertainment'])->name('kids-entertainment');
route::get('/listing', [HomeController::class, 'listing'])->name('listing');
route::get('/medical-services', [HomeController::class, 'medical_services'])->name('medical-services');
route::get('/orthopaedic-therapy', [HomeController::class, 'orthopaedic_therapy'])->name('orthopaedic-therapy');
route::get('/product-review', [HomeController::class, 'product_review'])->name('product-review');
route::get('/products', [HomeController::class, 'products'])->name('products');
route::get('/rent-a-chair-in-salon-2', [HomeController::class, 'rent_a_chair_in_salon_2'])->name('rent-a-chair-in-salon-2');
route::get('/rent-a-chair-in-salon', [HomeController::class, 'rent_a_chair_in_salon'])->name('rent-a-chair-in-salon');
route::get('/rent-a-house', [HomeController::class, 'rent_a_house'])->name('rent-a-house');
route::get('/rent-an-office', [HomeController::class, 'rent_an_office'])->name('rent-an-office');
route::get('/restaurant', [HomeController::class, 'restaurant'])->name('restaurant');
route::get('/robert-kane', [HomeController::class, 'robert_kane'])->name('robert-kane');
route::get('/salon-&-spa', [HomeController::class, 'salon_and_spa'])->name('salon-&-spa');
route::get('/saptherapy-physical-rehab', [HomeController::class, 'saptherapy_physical_rehab'])->name('saptherapy-physical-rehab');
route::get('/seller', [HomeController::class, 'seller'])->name('seller');
route::get('/services', [HomeController::class, 'services'])->name('services');
route::get('/shop-details', [HomeController::class, 'shop_details'])->name('shop-details');
route::get('/shop', [HomeController::class, 'shop'])->name('shop');
route::get('/sports-&-fitness', [HomeController::class, 'sports_and_fitness'])->name('sports-&-fitness');
route::get('/sports', [HomeController::class, 'sports'])->name('sports');
route::get('/things-to-do', [HomeController::class, 'things_to_do'])->name('things-to-do');
route::get('/travel-&-tour', [HomeController::class, 'travel_and_tour'])->name('travel-&-tour');
route::get('/user-dashboard', [HomeController::class, 'user_dashboard'])->name('user-dashboard');
route::get('/navbar', [HomeController::class, 'navbar'])->name('navbar');



Route::get('Add_New_Category', [AdminController::class, 'Add_New_Category'])->name('Add_New_Category');
Route::get('Add_New_Product', [AdminController::class, 'Add_New_Product'])->name('Add_New_Product');
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('Add_new_user', [AdminController::class, 'Add_new_user'])->name('Add_new_user');
Route::get('Add_new_vendor', [AdminController::class, 'Add_new_vendor'])->name('Add_new_vendor');
Route::get('All_users', [AdminController::class, 'All_users'])->name('All_users');
Route::get('apps_companies', [AdminController::class, 'apps_companies'])->name('apps_companies');
Route::get('apps_company_details', [AdminController::class, 'apps_company_details'])->name('apps_company_details');
Route::get('apps_contacts', [AdminController::class, 'apps_contacts'])->name('apps_contacts');
Route::get('apps_ecommerce', [AdminController::class, 'apps_ecommerce'])->name('apps_ecommerce');
Route::get('apps_ecommerce_add_category', [AdminController::class, 'apps_ecommerce_add_category'])->name('apps_ecommerce_add_category');
Route::get('apps_ecommerce_add_customer', [AdminController::class, 'apps_ecommerce_add_customer'])->name('apps_ecommerce_add_customer');
Route::get('apps_ecommerce_add_product', [AdminController::class, 'apps_ecommerce_add_product'])->name('apps_ecommerce_add_product');
Route::get('apps_ecommerce_add_vendor', [AdminController::class, 'apps_ecommerce_add_vendor'])->name('apps_ecommerce_add_vendor');
Route::get('apps_ecommerce_cart', [AdminController::class, 'apps_ecommerce_cart'])->name('apps_ecommerce_cart');
Route::get('apps_ecommerce_categories', [AdminController::class, 'apps_ecommerce_categories'])->name('apps_ecommerce_categories');
Route::get('apps_ecommerce_checkout', [AdminController::class, 'apps_ecommerce_checkout'])->name('apps_ecommerce_checkout');
Route::get('apps_ecommerce_customers', [AdminController::class, 'apps_ecommerce_customers'])->name('apps_ecommerce_customers');
Route::get('apps_ecommerce_orders', [AdminController::class, 'apps_ecommerce_orders'])->name('apps_ecommerce_orders');
Route::get('apps_ecommerce_order_details', [AdminController::class, 'apps_ecommerce_order_details'])->name('apps_ecommerce_order_details');
Route::get('apps_ecommerce_products', [AdminController::class, 'apps_ecommerce_products'])->name('apps_ecommerce_products');
Route::get('apps_ecommerce_product_details', [AdminController::class, 'apps_ecommerce_product_details'])->name('apps_ecommerce_product_details');
Route::get('apps_ecommerce_refund', [AdminController::class, 'apps_ecommerce_refund'])->name('apps_ecommerce_refund');
Route::get('apps_ecommerce_sellers', [AdminController::class, 'apps_ecommerce_sellers'])->name('apps_ecommerce_sellers');
Route::get('apps_ecommerce_vendor', [AdminController::class, 'apps_ecommerce_vendor'])->name('apps_ecommerce_vendor');
Route::get('apps_file_manager', [AdminController::class, 'apps_file_manager'])->name('apps_file_manager');
Route::get('apps_invoice', [AdminController::class, 'apps_invoice'])->name('apps_invoice');
Route::get('basic_ui_lightbox', [AdminController::class, 'basic_ui_lightbox'])->name('basic_ui_lightbox');
Route::get('Category_List', [AdminController::class, 'Category_List'])->name('Category_List');
Route::get('Invoices', [AdminController::class, 'Invoices'])->name('Invoices');
// Route::get('register', [AdminController::class, 'register'])->name('register');
Route::get('dashboard', [AuthController::class, 'dashboard']); 

// Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
// Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');


Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');



// Route::get('/orders', 'ProfileController@orders')->name('orders');


Route::get('/image', [ImageController::class,'index'])->name('image.index');
Route::post('/image', [ImageController::class,'store'])->name('image.store');


Route::get('/orders', [AdminController::class, 'orders']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
})->name('home');

Route::get('/show-orders', [HomeController::class, 'showOrders']);

Route::get('/admin/orders', [AdminController::class, 'orders']);
Route::get('/user-dashboard', [HomeController::class, 'showUserDashboard']);

Route::post('/cancel/{id}', [AdminController::class, 'cancelOrder'])->name('cancel-data');

