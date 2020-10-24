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

// Route::get('/','MainController@home')->name('homepage');

// Route::get('hightlight','MainController@a')->name('hightlight');

// Route::get('','MainController@testing')->name('testingpage');

Route::get('/', 'MyController@home')->name('homepage');

Route::get('/festival', 'MyController@festival')->name('festivalpage');

Route::get('/ecotorism', 'MyController@ecotorism')->name('ecotorismpage');

Route::get('/community', 'MyController@community')->name('communitypage');

Route::get('/package', 'MyController@package')->name('packagepage');

Route::get('/threeday', 'MyController@threeday')->name('threedaypage');

Route::get('/fourday', 'MyController@fourday')->name('fourdaypage');

Route::get('/fiveday', 'MyController@fiveday')->name('fivedaypage');

Route::get('/day', 'MyController@day')->name('daypage');

Route::get('/yangon', 'MyController@yangon')->name('yangonpage');

Route::get('/bago', 'MyController@bago')->name('bagopage');

Route::get('/innwa', 'MyController@innwa')->name('innwapage');

Route::get('/optional', 'MyController@optional')->name('optionalpage');

Route::get('/mountain', 'MyController@mountain')->name('mountainpage');

Route::get('/trekking', 'MyController@trekking')->name('trekkingpage');

Route::get('/inle', 'MyController@inle')->name('inlepage');

Route::get('/promotional', 'MyController@promotional')->name('promotionalpage');

Route::get('/carrental', 'MyController@carrental')->name('carrentalpage');

Route::get('/about', 'MyController@about')->name('aboutpage');

Route::get('/contact', 'MyController@contact')->name('contactpage');


// Working with data in blade file
Route::get('service','MainController@service')->name('servicepage');

// CRUD for student table
Route::resource('student','StudentController');//resource(get,post,put,delete)

