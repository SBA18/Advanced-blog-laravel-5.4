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

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentifications
Auth::routes();

Route::get('/home', 'HomeController@index');

// Post
Route::get('/', 'PostsController@index')->name('homepage');
Route::get('/posts/create', 'PostsController@create')->name('createPost');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

//user posts
Route::get('posts/user/{user}', 'PostsController@userPosts');

//Categories
Route::get('/categories/list', 'CategoriesController@categoriesList');
Route::get('/categories/create', 'CategoriesController@create');


// Route::get('/categories/{category}', 'CategoriesController@show');
Route::post('/categories', 'CategoriesController@store');
Route::get('/posts/categories/{category}', 'CategoriesController@index');

//Tags
Route::get('/posts/tags/{tag}', 'TagsController@index');


// Add new comment
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Reply comment


// Manage Static Pages
Route::get('/contact-us', 'PagesController@contactUs')->name('contactUs');
Route::get('/about-me', 'PagesController@aboutMe')->name('aboutMe');
