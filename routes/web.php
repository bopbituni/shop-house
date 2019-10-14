<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/', "HomeStateController@index")->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::get('users/list', "CustomersController@index")->name('admin.users.list');
            Route::get('users/edit/{id}', "CustomersController@edit")->name('admin.users.edit');
            Route::post('users/update/{id}', "CustomersController@update")->name('admin.users.update');
            Route::get('users/show/{id}', "CustomersController@show")->name('admin.users.show');
            Route::get('users/delete/{id}', "CustomersController@delete")->name('admin.users.delete');
            Route::get('/users', 'UserController@index')->name('admin.users');
            Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');

            Route::get('products/list', "ProductsController@index")->name('admin.products.list');
            Route::get('products/create', "ProductsController@create")->name('admin.products.create');
            Route::post('products/store', "ProductsController@store")->name('admin.products.store');
            Route::get('products/edit/{id}', "ProductsController@edit")->name('admin.products.edit');
            Route::post('products/update/{id}', "ProductsController@update")->name('admin.products.update');
            Route::get('products/delete/{id}', "ProductsController@delete")->name('admin.products.delete');
            Route::get('products/bill', "ProductsController@")->name('admin.products.bill');

            Route::get('posts/list', "PostsController@index")->name('admin.posts.list');
            Route::get('posts/create', "PostsController@create")->name('admin.posts.create');
            Route::post('posts/store', "PostsController@store")->name('admin.posts.store');
            Route::get('posts/edit/{id}', "PostsController@edit")->name('admin.posts.edit');
            Route::post('posts/update/{id}', "PostsController@update")->name('admin.posts.update');
            Route::get('posts/show/{id}', "PostsController@show")->name('admin.posts.show');
            Route::get('posts/delete/{id}', "PostsController@delete")->name('admin.posts.delete');
        });
    });
});

Route::get('product/typeHouse/{id}', "TypesController@getTypeHouse")->name('shop.typeHouse');

Route::get('product/typeHouse/profile/{id}', "TypesController@getDetail")->name('shop.detail');
Route::post('product/typeHouse/profile', "ReceiveController@storeReceive")->name('shop.store.detail');

Route::get('/', "HomeStateController@index")->name('shop.home');
Route::get('/search' , "HomeStateController@getSearch")->name("shop.checkSearch");
Route::get('/project', function (){
    return view('shop.detail');
});