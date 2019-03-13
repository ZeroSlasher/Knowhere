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


Route::any('/', 'HomeController@index');
Route::any('/register','UserRegController@register');
Route::any('/login','LoginController@login');
Route::any('/ownerprofile','HomeController@ownerprofile');
Route::any('/requestlisting','RequestProfController@request');
Route::any('subcat/ajax/{id}','HomeController@subcatajax');
Route::any('dist/ajax/{id}','HomeController@distajax');
Route::any('city/ajax/{id}','HomeController@cityajax');


