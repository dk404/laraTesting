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
Route::any('api/category-data', 'ApiController@categoryData');
Route::get('category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
Route::get('category/{id}-{slug?}', ['as' => 'category.show', 'uses' => 'CategoryController@show']);
Route::resource('category', 'CategoryController', ['except' => ['show', 'create']]);

// End Category Routes

// Begin Gadget Routes
Route::get('api/gadget-data', 'ApiController@gadgetData');
Route::resource('gadget', 'GadgetController');
// End Gadget Routes

// Begin Subcategory Routes
Route::get('api/subcategory-data', 'ApiController@subcategoryData');
Route::resource('subcategory', 'SubcategoryController');
// End Subcategory Routes
// Begin Dummy Routes

Route::get('api/dummy-data', 'ApiController@dummyData');

Route::resource('dummy', 'DummyController');

// End Dummy Routes
// Begin Post Routes

Route::get('api/post-data', 'ApiController@postData');

Route::resource('post', 'PostController');

// End Post Routes