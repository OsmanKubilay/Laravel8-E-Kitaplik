<?php

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
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('homepage');

Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('aboutus');
Route::get('/references',[\App\Http\Controllers\HomeController::class,'references'])->name('references');
Route::get('/fag',[\App\Http\Controllers\HomeController::class,'fag'])->name('fag');
Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/sendmessage',[\App\Http\Controllers\HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/product/{id}/{slug}',[\App\Http\Controllers\HomeController::class,'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}',[\App\Http\Controllers\HomeController::class,'categoryproducts'])->name('categoryproducts');


//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index']) ->name('adminhome');
    Route::get('/register', [\App\Http\Controllers\Admin\HomeController::class,'adminRegister']) ->name('admin_register');
#CATEGORY
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class,'index']) ->name('admin_category');
    Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class,'add']) ->name('admin_category_add');
    Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create']) ->name('admin_category_create');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit']) ->name('admin_category_edit');
    Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update']) ->name('admin_category_update');
    Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'destroy']) ->name('admin_category_delete');
    Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class,'show']) ->name('admin_category_show');

#PRODUCT
    Route::prefix('product')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class,'index']) ->name('admin_products');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class,'create']) ->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class,'store']) ->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class,'edit']) ->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class,'update']) ->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class,'destroy']) ->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ProductController::class,'show']) ->name('admin_product_show');

    });
    #Message
    Route::prefix('messages')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class,'index']) ->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class,'edit']) ->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class,'update']) ->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class,'destroy']) ->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class,'show']) ->name('admin_product_show');

    });
#PRODUCT IMAGE GALLERY
    Route::prefix('image')->group(function (){

        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'create']) ->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'store']) ->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'destroy']) ->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class,'show']) ->name('admin_image_show');

    });
#SETTİNG
    Route::get('/setting', [\App\Http\Controllers\Admin\SettingController::class,'index']) ->name('admin_setting');
    Route::post('/setting/update', [\App\Http\Controllers\Admin\SettingController::class,'update']) ->name('admin_setting_update');
});
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
});

Route::get('/admin/login', [\App\Http\Controllers\HomeController::class,'login']) ->name('admin_login');
Route::get('/logout', [\App\Http\Controllers\HomeController::class,'logout']) ->name('logout');
Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class,'logincheck']) ->name('admin_logincheck');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
