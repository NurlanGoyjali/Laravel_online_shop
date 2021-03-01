<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


    Route::get('/', function () { return view('welcome'); });
    Route::get('/logout',[HomeController::class,'logout']/*function(){ Auth::logout(); return redirect(route('home.page'));  }*/)->name('lgout');


// Admin
    Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class , 'index' ])->name('admin.home')->middleware('auth');

    Route::middleware('auth')->prefix('admin')->group(function (){
        Route::middleware('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class , 'index' ])->name('admin.home');
//Category routes
    Route::prefix('category')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class , 'index' ])->name('admin.category');
        Route::get('add', [App\Http\Controllers\Admin\CategoryController::class , 'AddHelper' ])->name('admin.category.add');
        Route::post('create', [App\Http\Controllers\Admin\CategoryController::class , 'create' ])->name('admin.category.create');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\CategoryController::class , 'destroy' ])->name('admin.category.destroy');
        Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\CategoryController::class , 'update' ])->name('admin.category.update');
        Route::get('show/{id}', [App\Http\Controllers\Admin\CategoryController::class , 'show' ])->name('admin.category.show');
    });

    //Product routes
    Route::prefix('product')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\ProductController::class , 'index' ])->name('admin.product');
        Route::get('show/{id}', [App\Http\Controllers\Admin\ProductController::class , 'show' ])->name('admin.product.show');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ProductController::class , 'destroy' ])->name('admin.product.destroy');
        Route::match(array('GET','POST'),'create', [App\Http\Controllers\Admin\ProductController::class , 'create' ])->name('admin.product.create');
        Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\ProductController::class , 'update' ])->name('admin.product.update');
    });

    Route::prefix('user')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\UserController::class , 'index' ])->name('admin.user');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\UserController::class , 'destroy' ])->name('admin.user.destroy');
        Route::get('show/{id}', [App\Http\Controllers\Admin\UserController::class , 'show' ])->name('admin.user.show');
        Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\UserController::class , 'update' ])->name('admin.user.update');
    });

        //Contact routes
        Route::prefix('contact')->group(function (){
            Route::get('/', [App\Http\Controllers\Admin\MessageController::class , 'index' ])->name('admin.contact');
            Route::get('show/{id}', [App\Http\Controllers\Admin\MessageController::class , 'show' ])->name('admin.contact.show');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\MessageController::class , 'destroy' ])->name('admin.contact.destroy');
            Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\MessageController::class , 'update' ])->name('admin.contact.update');
        });
        //Image routes
        Route::prefix('image')->group(function (){
            Route::get('show/{id}', [App\Http\Controllers\Admin\ImageController::class , 'show' ])->name('admin.image.show');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\ImageController::class , 'destroy' ])->name('admin.image.destroy');
            Route::post('create/{id}', [App\Http\Controllers\Admin\ImageController::class , 'create' ])->name('admin.image.create');
            Route::match(array('GET','POST'),'update/{id}', [App\Http\Controllers\Admin\ImageController::class , 'update' ])->name('admin.image.update');


    });

    Route::prefix('review')->group(function (){

        Route::get('', [App\Http\Controllers\Admin\UserReviewsController::class , 'index' ])->name('admin.review');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\UserReviewsController::class , 'show' ])->name('admin.review.show');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\UserReviewsController::class , 'destroy' ])->name('admin.review.destroy');

    });

        Route::prefix('faq')->group(function (){

            Route::get('', [App\Http\Controllers\Admin\FaqController::class , 'index' ])->name('admin.faq');
            Route::match(array('GET','POST'),'/create', [App\Http\Controllers\Admin\FaqController::class , 'create' ])->name('admin.faq.create');
            Route::match(array('GET','POST'),'/update/{id}', [App\Http\Controllers\Admin\FaqController::class , 'update' ])->name('admin.faq.update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\FaqController::class , 'destroy' ])->name('admin.faq.destroy');

        });

    //Route::get('settings', [App\Http\Controllers\Admin\SettingsController::class , 'index' ])->name('admin.settings');
    //Settings routes
    Route::match(array('GET','POST'),'settings', [App\Http\Controllers\Admin\SettingsController::class , 'index' ])->name('admin.settings');

        }); #admin

}); #auth


    //Kullanıcı
Route::middleware('auth')->prefix('myuser')->namespace('myuser')->group(function (){

Route::get('/profile', [\App\Http\Controllers\Home\UserController::class , 'index' ])->name('myprofile');
Route::match(array('GET','POST'),'/create', [\App\Http\Controllers\Home\UserCrudController::class , 'create' ])->name('user.product.create');
Route::match(array('GET','POST'),'/update/{id}', [\App\Http\Controllers\Home\UserCrudController::class , 'update' ])->name('user.product.update');
//Route::match(array('GET','POST'),'/userPgalery/{id}', [\App\Http\Controllers\Home\UserCrudController::class , 'update' ])->name('user.product.galery');
Route::get('/products', [\App\Http\Controllers\Home\UserCrudController::class , 'index' ])->name('user.products');
Route::get('/sold/{id}', [\App\Http\Controllers\Home\UserCrudController::class , 'sold' ])->name('user.sold');
Route::get('/delete/{id}', [\App\Http\Controllers\Home\UserCrudController::class , 'destroy' ])->name('user.delete');

Route::get('/addfavory/{id}', [\App\Http\Controllers\Home\UserController::class , 'create' ])->name('user.add.favory');

Route::get('/deletefavory/{id}', [\App\Http\Controllers\Home\UserController::class , 'destroy' ])->name('user.delete.favory');
Route::get('/favory', function (){ return view('home.UserFavory');  })->name('user.favory');



    Route::prefix('image')->group(function (){
        Route::get('show/{id}', [App\Http\Controllers\Home\UPIcontroller::class , 'show' ])->name('user.image.show');
        Route::get('delete/{id}', [App\Http\Controllers\Home\UPIcontroller::class , 'destroy' ])->name('user.image.destroy');
        Route::post('create/{id}', [App\Http\Controllers\Home\UPIcontroller::class , 'create' ])->name('user.image.create');
        Route::match(array('GET','POST'),'Iupdate/{id}', [App\Http\Controllers\Home\UPIcontroller::class , 'update' ])->name('user.image.update');


    });

});

Route::fallback(function (){return view('home.404');})->name('404');
Route::get('/' , function (){ if( abort(500))  return redirect(route('404'));   })->name('error');



Route::get('/dashboard', [HomeController::class , 'login' ])->name('adminlogin');
Route::post('/loginchk', [HomeController::class , 'loginchk' ])->name('loginchk');
Route::get('/', [HomeController::class , 'index' ])->name('home.page');

Route::post('', [HomeController::class , 'getproduct' ])->name('getproduct');
Route::get('/Yorumlar/{id}', [HomeController::class , 'review' ])->name('review');

Route::get('/urunler/{id}',[HomeController::class,'CategoryPtoducts'])->name('categoryproducts');
Route::get('/urun/{id}',[HomeController::class,'Product'])->name('product');
Route::get('/hakkımızda', [\App\Http\Controllers\HomeController::class , 'AboutUs' ])->name('aboutus');
Route::get('/referanslar', [\App\Http\Controllers\HomeController::class , 'References' ])->name('references');
Route::get('/sss', [\App\Http\Controllers\HomeController::class , 'Fag' ])->name('fag');
Route::match(array('GET','POST'),'/contact', [\App\Http\Controllers\HomeController::class , 'Contact' ])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
