<?php

Route::get('/',[
    'uses'  =>'TechController@home',
    'as'    =>'/'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add-category',[
    'uses'  =>'CategoryController@addCategory',
    'as'    =>'add-category'
]);

Route::post('/category/new-category',[
    'uses'  =>'CategoryController@newCategory',
    'as'    =>'new-category'
]);
Route::get('/category/manage-category',[
    'uses'  =>'CategoryController@manageCategory',
    'as'    =>'manage-category'
]);

Route::post('/category/delete-category',[
    'uses'  =>'CategoryController@deleteCategory',
    'as'    =>'delete-category'
]);
Route::get('/category/edit-category/{id}',[
    'uses'  =>'CategoryController@editCategory',
    'as'    =>'edit-category'
]);
Route::post('/category/update-category',[
    'uses'  =>'CategoryController@updateCategory',
    'as'    =>'update-category'
]);
Route::get('/blog/add-blog',[
    'uses'  =>'BlogController@addBlog',
    'as'    =>'add-blog'
]);
Route::post('/blog/new-blog',[
    'uses'  =>'BlogController@newBlog',
    'as'    =>'new-blog'
]);
Route::get('/blog/manage-blog',[
    'uses'  =>'BlogController@manageBlog',
    'as'    =>'manage-blog'
]);
Route::post('/blog/delete-blog',[
    'uses'  =>'BlogController@deleteBlog',
    'as'    =>'delete-blog'
]);
Route::get('/blog/edit-blog/{id}',[
    'uses'  =>'BlogController@editBlog',
    'as'    =>'edit-blog'
]);
Route::post('/blog/update-blog',[
    'uses'  =>'BlogController@updateBlog',
    'as'    =>'update-blog'
]);
Route::get('/blog/blog-post/{id}',[
    'uses'  =>'BlogController@blogPost',
    'as'    =>'blog-post'
]);
Route::get('/blog/post/{id}',[
    'uses'  =>'TechController@post',
    'as'    =>'post'
]);

Route::get('/sign-up',[
    'uses'  =>'SignUpController@index',
    'as'    =>'sign-up'
]);

Route::post('/new-sign-up',[
    'uses'  =>'SignUpController@newSignUp',
    'as'    =>'new-sign-up'
]);
Route::post('/visitor-logout',[
    'uses'  =>'SignUpController@visitorLogout',
    'as'    =>'visitor-logout'
]);
Route::get('/visitor-login',[
    'uses'  =>'SignUpController@visitorLogoin',
    'as'    =>'visitor-login'
]);
Route::post('/visitor-sign-in',[
    'uses'  =>'SignUpController@visitorSignIn',
    'as'    =>'visitor-sign-in'
]);

Route::get('/email-check/{email}',[
    'uses'  =>'SignUpController@emailCheck',
    'as'    =>'email-check'
]);