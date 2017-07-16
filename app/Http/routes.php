<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/login', [
    'uses'=>'appController@login',
    'as' => 'login'
]);

Route::post('/login', [
    'uses'=>'appController@postSignIn',
    'as' => 'login'
]);

Route::get('/signup', [
    'uses'=>'appController@signup',
    'as' => 'signup'
]);

Route::post('/signup', [
    'uses'=>'appController@postSignUp',
    'as' => 'signup'
]);

Route::get('/author', [
    'uses'=>'appController@getAuthor',
    'as' => 'author',
    'middleware' => 'roles',
    'roles' => ['Admin','Author']
]);

Route::get('/generate-article', [
    'uses'=>'appController@getGenerateArticle',
    'as' => 'article',
    'middleware' => 'roles',
    'roles' => 'Author'
]);



Route::get('/admin', [
    'uses'=>'appController@getAdmin',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => 'Admin'
]);

Route::post('/assign_roles', [
    'uses'=>'appController@postAdminAssignRoles',
    'as' => 'assign_roles',
    'middleware' => 'roles',
    'roles' => 'Admin'
]);

Route::post('/post', [
    'uses' => 'appController@getLogout',
    'as' => 'logout'
]);