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

Route::get('/home', 'HomeController@index')->name('home');

//This group deals with everything to do with roles .....
Route::prefix('roles')->group(function () {
    Route::post('store', 'RoleController@store');
    Route::get('/','RoleController@index');
});

//This group deals with everything to do with roles .....
Route::prefix('registrationgroups')->group(function () {
    Route::post('store', 'RegistrationGroupController@store');
    Route::get('/','RegistrationGroupController@index');
    Route::get('showone/{id}','RegistrationGroupController@showone');
    Route::post('edit/','RegistrationGroupController@edit');
});


Route::prefix('supportcategories')->group(function () {
    Route::post('store', 'SupportCategoryController@store');
    Route::get('/','SupportCategoryController@index');
    Route::get('showone/{id}','SupportCategoryController@showone');
    Route::post('edit/','SupportCategoryController@edit');
});

Route::prefix('supportitems')->group(function () {
    Route::post('store', 'SupportItemController@store');
    Route::get('/','SupportItemController@index');
    Route::get('showone/{id}','SupportItemController@showone');
    Route::post('edit/','SupportItemController@edit');
});


Route::prefix('supportcatalogues')->group(function () {
    Route::post('store', 'SupportCatalogueController@store');
    Route::get('/','SupportCatalogueController@index');
    Route::get('create/','SupportCatalogueController@create');
    Route::get('showone/{id}','SupportCatalogueController@showone');
    Route::post('edit/','SupportCatalogueController@edit');
});

//This group deals with everything to do with companies .....
Route::prefix('companies')->group(function () {
    Route::post('store', 'CompanyController@store');
    Route::get('/','CompanyController@index');
});
//This group deals with everything to do with companies .....
Route::prefix('users')->group(function () {
    Route::post('store', 'UsersController@store');
    Route::get('/','UsersController@index');
});
