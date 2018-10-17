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

//Route::get('/', function () {
//    return view('layouts.app');
//});

use Illuminate\Support\Facades\Auth;

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/admin','AdminController@admin')->name('admin.show');
Route::get('/','ClientController@index')->name('home');
Route::get('menu/show','ClientController@menu')->name('menu.show');
Route::get('/menu/food/{food}','ClientController@food')->name('menu.food');
Route::get('menu/index','FoodController@index')->name('menu.index');

Route::get('admin/routes', 'AdminController@adminr')->middleware('admin');
Route::get('admin/menu','AdminController@menu')->name('admin.menu');
Route::get('admin/comment','AdminController@comment')->name('admin.comment');
Route::get('admin/indexfood','AdminController@indexfood')->name('admin.indexfood');
Route::get('admin/foodlist','AdminController@foodlist')->name('admin.foodlist');
Route::get('admin/foodtypelist','AdminController@foodtypelist')->name('admin.foodtypelist');
Route::get('admin/{id}/editfoodtype','AdminController@editfoodtype')->name('admin.editfoodtype');
Route::get('admin/{id}/editfood','AdminController@editfood')->name('admin.editfood');
Route::delete('admin/deletefoodtype/{id}','AdminController@deletefoodtype')->name('admin.deletefoodtype');
Route::delete('admin/deletefood/{id}','AdminController@deletefood')->name('admin.deletefood');
Route::patch('admin/updatefood/{id}','AdminController@updatefood')->name('admin.updatefood');
Route::patch('admin/updatefoodtype/{id}','AdminController@updatefoodtype')->name('admin.updatefoodtype');
Route::get('admin/createfood','AdminController@createfood')->name('admin.createfood');
Route::post('admin/storefood','AdminController@storefood')->name('admin.storefood');
Route::get('admin/createfoodtype','AdminController@createfoodtype')->name('admin.createfoodtype');
Route::post('admin/storefoodtype','AdminController@storefoodtype')->name('admin.storefoodtype');
Route::post('admin/undeletecomment/{id}','AdminController@undeletecomment')->name('admin.undeletecomment');
Route::post('admin/deletecomment/{id}','AdminController@deletecomment')->name('admin.deletecomment');
Route::post('admin/enforcedeletecomment/{id}','AdminController@enforcedeletecomment')->name('admin.enforcedeletecomment');
Route::get('menu/getajax','ClientController@getajax')->name('menu.getajax');

Route::get('/address/foo','AddressController@foo') ->name('address.foo');

Auth::routes();
///cart
Route::get('cart/getajax','CartController@getajax')->name('cart.getajax');
Route::get('cart','CartController@index')->name('cart.index');
Route::get('cart/add/{id}','CartController@addItem');
Route::get('myid',function (){
    return Cart::content();
});
Route::get('cart/remove/{id}','CartController@removeItem');
Route::get('cart/update/','CartController@update');
Route::get('cart/updatebutton','CartController@updatebutton');

Route::get('checkout','CartController@checkout');
Route::post('comment/{id}','CommentController@store')->name('comment.store');