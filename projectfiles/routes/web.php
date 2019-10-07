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
Route::get('/',function(){
return view('admin.index');
});

// Route::get('/admin/login',function(){

// });

Route::get('/', 'FrontController@index')->name('homepage');

Auth::routes();


Route::group(['middleware' => ['admin']], function () {

    Route::resource('fooditem', 'FoodItemController');

    Route::resource('fooditemtype', 'FoodItemTypeController');
    Route::get('/dashboard',function(){
        return view('layouts.adminsidebar');
    });


});
Route::resource('orders', 'OrdersController');
Route::resource('orderitem', 'OrderItemController');


Route::resource('customer','CustomerController'	);
// Route::group(['middleware' => ['client']], function () {
   
//     Route::get('/adminsidebar', 'AdminController@index')->name('adminsidebar');
//     // Route::get('/order',function(){
//     // return view('orders.order');
//     // });
//     Route::get('/dashboard',function(){
//         return view('layouts.customersidebar');
//     });
// });



Route::resource('contact', 'ContactController');

Route::get('/about', function(){
    return view('front.about');
});
Route::get('/home', function(){
    return view('front.home');
});
 
 //admin routes
//  Route::get('/admin/dashboard', function () {
//     $courses = Course::all();
//     return view('admin.courses', compact('courses'));
// });

// Route::resource('admin', 'AdminController');
Route::get('/admin','AdminController@index');


// Route::get('/admin/users', function () {
//     $users = User::all();
//     return view('admin.users', compact('users'));
// });

// Route::get('/admin', function(){
//     return view('layouts.adminsidebar');
// });