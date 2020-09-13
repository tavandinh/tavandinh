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

Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin'], function(){
    Route::get('user/', 'UserController@index')->name('user.index');
    Route::get('user/{id}/comment', 'UserController@getCommentByUserID')->name('user.comment');
    Route::get('user/{id}/all', 'UserController@getAllInformationOfUser')->name('user.allInfo');
    Route::get('comment/{id}/user', 'CommentController@getUserByCommentID')->name('comment.user');
});