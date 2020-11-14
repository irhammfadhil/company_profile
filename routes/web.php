<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/coba', function () {
    return view('welcome');
});

Route::get('/about_us', function() {
	return view('about');
});

Route::get('/product', 'App\Http\Controllers\ProductController@viewProduct');

Route::get('/contact_us', function() {
	return view('contact');
});

//Route::post('/contact_us', 'ContactUsController@save');
Route::post('/contact_us', 'App\Http\Controllers\ContactUsController@save');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact_us_list', 'App\Http\Controllers\InquiryListController@getAllInquiries')->middleware('auth');;

Route::post('/contact_us_list/done/{id}', 'App\Http\Controllers\InquiryListController@markAsDone')->middleware('auth');;

Route::get('/contact_us_list/session', 'App\Http\Controllers\InquiryListController@checkSession');

Route::get('/product_list/add', 'App\Http\Controllers\ProductController@upload')->middleware('auth');

Route::post('/product_list/proses', 'App\Http\Controllers\ProductController@proses')->middleware('auth');

Route::get('/product_list', 'App\Http\Controllers\ProductController@viewProductAdmin')->middleware('auth');

Route::get('/product_list/edit/{id}', 'App\Http\Controllers\ProductController@edit')->middleware('auth');

Route::post('/product_list/edit/proses/{id}', 'App\Http\Controllers\ProductController@updateProduct')->middleware('auth');

Route::get('/product_list/delete/{id}', 'App\Http\Controllers\ProductController@deleteProduct')->middleware('auth');

Route::get('/dashboards', function () {
    return view('admin-dashboard');
});

Route::get('/', 'App\Http\Controllers\ProductController@viewProduct');
Route::get('/2', function() {
	return view('coba2');
});