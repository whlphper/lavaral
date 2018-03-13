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

Route::prefix('article')->group(function(){
    Route::get('index','ArticleController@index');
    Route::get('create','ArticleController@create');
    // 限制单个id
    // Route::get('edit/{id}/{name}','ArticleController@edit')->where('id','[0-9]+');
    Route::get('edit/{id}/{name}','ArticleController@edit');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('article')->group(function(){
        Route::get('index','ArticleController@index');
        Route::get('create','ArticleController@create');
        Route::post('store','ArticleController@store');
    });
    Route::prefix('category')->group(function(){
        Route::get('helloWorld','CategoryController@helloWorld');
        Route::get('showHtml','CategoryController@showHtml');
        Route::get('getTest/{id}','CategoryController@getTest');
    });
});
