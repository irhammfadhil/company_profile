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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about_us', function() {
	return view('about');
});

Route::get('/product', function() {
	return view('product');
});

Route::get('/contact_us', function() {
	return view('contact');
});

//Route::post('/contact_us', 'ContactUsController@save');
Route::post('/contact_us', 'App\Http\Controllers\ContactUsController@save');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact_us_list', 'App\Http\Controllers\InquiryListController@getAllInquiries');

Route::post('/contact_us_list/done/{id}', 'App\Http\Controllers\InquiryListController@markAsDone');