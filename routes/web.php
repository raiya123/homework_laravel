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

Route::get('/home','HomeController@index')->name('home');
Route::get('/add','UserController@addProfile');

Route::get('/showProfile','UserController@showProfile');
Route::get('/showname','ProfieController@showUserName');


Route::get('/deleteprofile/{id}','UserController@deleteprofile')->name('deleteprofile');
Route::get('/showformEidt/{id}','UserController@showformEidt')->name('showformEidt');
Route::put('/update/{id}','UserController@update')->name('update');


/////// Posts
Route::post('/post','UserController@addPost')->name('addPost');
Route::get('/formPost','UserController@addForm')->name('posts');
Route::get('/ShowPost','UserController@showPost')->name('showPost');



