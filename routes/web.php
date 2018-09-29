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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt/{id}', 'FrontController@shirt')->name('shirt');

Auth::routes();
Route::get('/logout','Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('login');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function(){
    
    Route::get('/', 'BackednController@index')->name('admin.index');

    Route::resource('product','ProductController')->names([
        'create' => 'admin.product.create',
        'index' => 'admin.product',
        'update' => 'admin.product.update',
        'show' => 'admin.product.show',
        'destroy' => 'admin.product.delete'
    ]);
    Route::resource('category','CategoriesController')->names([
        'index' => 'admin.categories',
    ]);

});
