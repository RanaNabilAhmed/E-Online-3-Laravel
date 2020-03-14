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

// Admin Controller Start Here
 Route::get('/admin','UserController@index');
 Route::get('/adminlogin','UserController@login');
 Route::post('/loginas','UserController@authenticate');
 Route::get('/logout','UserController@logout');

 Route::group(['prefix'=>'/user'],function(){
   Route::get('/alluser','UserController@allview');
    Route::get('/adduser','UserController@create');
    Route::post('/adduser','UserController@store');
    Route::get('/edit/{id}','UserController@edit');
    Route::post('/update','UserController@update');
    Route::get('/block','UserController@blockview');
    Route::get('/block/{id}','UserController@blockuser');
    Route::get('/delete/{id}','UserController@destroy');
    Route::get('/active/{id}','UserController@activeuser');

 });

 Route::group(['prefix'=>'/product'],function(){
   Route::get('/allproduct','ProductController@index');
   Route::get('/addproduct','ProductController@create');
   Route::post('/addproduct','ProductController@store');


 });

 Route::group(['prefix'=>'/category'],function(){
    Route::get('/addcategory','CategoryController@create');
 });

 Route::group(['prefix'=>'/order'],function(){
    Route::get('/allorder','OrderController@create');
 });

 Route::group(['prefix'=>'/pages'],function(){
   Route::get('/profile/{id}','PagesController@index');
   Route::get('/contact','PagesController@profileview');
   Route::get('/gallery','PagesController@gallery');
});
// Admin Controller End Here

// FrontEnd Controller Start Here
 Route::group(['prefix'=>'/'],function(){
 Route::get('/index','FrontController@index');
 });

 Route::get('/ind','CartController@index');
 Route::get('index/come','CartController@showcart');
// FrontEnd Controller End Here