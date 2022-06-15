<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('backend/dashboard');
// });

Route::get('/', function () {
    return view('frontend/dashboard');
});


Route::get('/dashboard', function(){
    return view('backend.dashboard');
})->name('dashboard');


Route::get('/blank', function(){
    return view('backend.blank');
});


// for Product
Route::group(['prefix'=>'/product'], function(){
    Route::get('/create', 
    'App\Http\Controllers\Backend\ProductController@create')->name('create');
    Route::post('/store', 
    'App\Http\Controllers\Backend\ProductController@store')->name('store');
    Route::get('/manage', 
    'App\Http\Controllers\Backend\ProductController@index')->name('manage');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');
    Route::get('/delete/{id}', 
    'App\Http\Controllers\Backend\ProductController@destroy')->name('delete');
});

// for Category
Route::group(['prefix'=>'category'], function(){
    Route::get('/create', 
    'App\Http\Controllers\Backend\CategoryController@create')->name('catCreate');
    Route::post('/store', 
    'App\Http\Controllers\Backend\CategoryController@store')->name('catStore');
    // Route::get('/manage', 
    // 'App\Http\Controllers\Backend\CategoryController@index')->name('manage');
    // Route::get('/edit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('edit');
    // Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('update');
    // Route::get('/delete/{id}', 
    // 'App\Http\Controllers\Backend\CategoryController@destroy')->name('delete');
});

// for User
Route::get('/user-register', function(){
    return view('frontend.register.userRegister');
})->name('user.register');
Route::get('/user-login', function(){
    return view('frontend.register.userLogin');
})->name('user.login');

// Route for Google Login
Route::get('/gotogoogle',[LoginController::class,'gotogoogle'])->name('gotogoogle');
Route::get('/google/login',[LoginController::class,'googleinfostore']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
