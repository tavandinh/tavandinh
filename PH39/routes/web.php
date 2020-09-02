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
    Route::get('user/findUserAgeGreaterThan20/', 'UserController@findUserAgeGreaterThan20')->name('user.findUserAgeGreaterThan20');
    Route::get('user/findUserBirthdayMonth3/', 'UserController@findUserBirthdayMonth3')->name('user.findUserBirthdayMonth3');
    Route::get('user/findUserProvinceReidfort/', 'UserController@findUserProvinceReidfort')->name('user.findUserProvinceReidfort');
    Route::get('user/updateUserAgeGreaterThan18/', 'UserController@updateUserAgeGreaterThan18')->name('user.updateUserAgeGreaterThan18');
    // Route::get('user/{id}/show', 'UserController@show')->name('user.show');
    // Route::get('user/{id}/reset/{token}', 'UserController@reset')->name('user.reset')->middleware('signed');
});