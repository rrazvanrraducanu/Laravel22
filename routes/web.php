<?php
Route::get('/', 'LoginController@index');
Route::any('login','LoginController@login');
Route::any('home','LoginController@check');
Route::get('register','LoginController@register');
Route::any('store', 'LoginController@store');
Route::any('profile','LoginController@profile');
//Route::any('check','LoginController@check');
Route::get('logout','LoginController@logout');
/*
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
*/

Auth::routes();


