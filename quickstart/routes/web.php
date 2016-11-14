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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Begin Widget Routes

Route::get('api/widget-data', 'ApiController@widgetData');

Route::resource('widget', 'WidgetController');

// End Widget Routes
// Begin Category Routes

Route::get('api/category-data', 'ApiController@categoryData');

Route::resource('category', 'CategoryController');

// End Category Routes
// Begin Subcategory Routes

Route::get('api/subcategory-data', 'ApiController@subcategoryData');

Route::resource('subcategory', 'SubcategoryController');

// End Subcategory Routes