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

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/create', ['as' => 'create-post', 'uses' => 'PostsController@create']);

Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');
Route::post('/posts', ['as' => 'store-post', 'uses' => 'PostsController@store']);

Route::post('/posts/{postId}/comments', 'CommentsController@store')->name('posts-comment');


