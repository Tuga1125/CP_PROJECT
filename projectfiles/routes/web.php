<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteService  Provider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@index')->name('homepage');

Auth::routes();


Route::group(['middleware' => ['admin']], function () {

    Route::resource('fooditem', 'FoodItemController');

    Route::resource('fooditemtype', 'FoodItemTypeController');
    Route::get('/dashboard',function(){
        return view('home');
    });

});



Route::group(['middleware' => ['user']], function () {
    Route::resource('orders', 'OrdersController');
    Route::resource('orderitem', 'OrderItemController');
});



Route::resource('contact', 'ContactController');

Route::get('/about', function(){
    return view('front.about');
});
Route::get('/home', function(){
    return view('front.home');
});
