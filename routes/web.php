<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('welcome'); });

Route::get('/', [HomeController::class , 'index' ])->name('home.page');

Route::get('login', [HomeController::class , 'login' ])->name('adminlogin');
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class , 'index' ])->name('admin.home')->middleware('auth');

Route::post('/loginchk', [HomeController::class , 'loginchk' ])->name('loginchk');

Route::middleware('auth')->prefix('admin')->group(function (){

    // Category controllers
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class , 'index' ])->name('admin.home');

    Route::prefix('category')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class , 'index' ])->name('admin.category');
        Route::get('add', [App\Http\Controllers\Admin\CategoryController::class , 'AddHelper' ])->name('admin.category.add');
        Route::post('create', [App\Http\Controllers\Admin\CategoryController::class , 'create' ])->name('admin.category.create');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\CategoryController::class , 'destroy' ])->name('admin.category.destroy');
        Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\CategoryController::class , 'update' ])->name('admin.category.update');
        Route::get('show/{id}', [App\Http\Controllers\Admin\CategoryController::class , 'show' ])->name('admin.category.show');
    });

    //Product controllers
    Route::prefix('product')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\ProductController::class , 'index' ])->name('admin.product');
        Route::get('show/{id}', [App\Http\Controllers\Admin\ProductController::class , 'show' ])->name('admin.product.show');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ProductController::class , 'destroy' ])->name('admin.product.destroy');
        Route::match(array('GET','POST'),'create', [App\Http\Controllers\Admin\ProductController::class , 'create' ])->name('admin.product.create');
        Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\ProductController::class , 'update' ])->name('admin.product.update');
    });
    Route::prefix('image')->group(function (){
        Route::get('show/{id}', [App\Http\Controllers\Admin\ImageController::class , 'show' ])->name('admin.image.show');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ImageController::class , 'destroy' ])->name('admin.image.destroy');
        Route::post('create/{id}', [App\Http\Controllers\Admin\ImageController::class , 'create' ])->name('admin.image.create');
        Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\ImageController::class , 'update' ])->name('admin.image.update');


    });


});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
