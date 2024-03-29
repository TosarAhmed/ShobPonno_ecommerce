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

Route::get('/','EiserController@index')->name('/');

Route::get('/category','EiserController@category')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add','CategoryController@addCategory')->name('add-category');
Route::post('/category/new','CategoryController@newCategory')->name('new-category');
Route::get('/category/manage','CategoryController@manageCategory')->name('manage-category');
Route::get('/category/published/{id}','CategoryController@publishedCategory')->name('published-category');
Route::get('/category/unpublished/{id}','CategoryController@unpublishedCategory')->name('unpublished-category');
Route::post('/category/update','CategoryController@updateCategory')->name('update-category');
Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('delete-category');


Route::get('/brand/add','BrandController@addBrand')->name('add-brand');
Route::post('/brand/new','BrandController@newBrand')->name('new-brand');
Route::get('/brand/view','BrandController@viewBrand')->name('view-brand');
Route::post('/brand/update','BrandController@updateBrand')->name('update-brand');


Route::get('/product/add','ProductController@addProduct')->name('add-product');
Route::post('/product/new','ProductController@newProduct')->name('new-product');
Route::get('/product/view','ProductController@viewProduct')->name('view-product');


/**Route::group(['prefix' => 'carts']), function(){
Route::post('/','CartsController@index')->name('carts');
Route::get('/store','CartsController@store')->name('carts.store');
});
*/












