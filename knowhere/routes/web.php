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
// Route::any('/LoginIndex', 'HomeController@lindex');
Route::any('/forgotpwd', 'HomeController@forgot')->name('forgotpwd');
Route::any('/register', 'UserRegController@register');
Route::any('/login', 'LoginController@login');
Route::any('/logout', 'LoginController@logout');
//Dashboard
Route::any('/admindashboard', 'DashController@admindash');
Route::any('/ownerdashboard', 'DashController@owndash');
Route::any('/userdashboard', 'DashController@userdash');

Route::any('/approveoutlet', 'AdminController@approveoutlet');
Route::any('/rqstapprove/{id}', 'AdminController@rqstapprove');
Route::any('/postdetails', 'HomeController@postdetails');
Route::any('/mypost', 'HomeController@mypost');
Route::any('/usermanagement', 'AdminController@usermanagement');
Route::any('/outletmanagement', 'AdminController@outletmanagement');

Route::any('/howitworks', 'HomeController@howitworks');
Route::any('/about', 'HomeController@about');
Route::any('/services', 'HomeController@services');
Route::any('/faq', 'HomeController@faq');
Route::any('/contact', 'HomeController@contact');
Route::any('/undermaintainence', 'HomeController@undermaintainence');
Route::any('/404', 'HomeController@notfound');
Route::any('/pricing', 'HomeController@pricing');

Route::any('/deleteprofile', 'HomeController@deleteprofile');
Route::any('/viewpost', 'HomeController@viewpost');
Route::any('/privacy', 'HomeController@privacy');
Route::any('/categories', 'HomeController@categories');
Route::any('/listing', 'HomeController@listing_list');

Route::any('/posting', 'HomeController@posting');
Route::any('/posting1', 'HomeController@posting1');
Route::any('/payment', 'HomeController@payment');
Route::any('/offer', 'HomeController@offer');
Route::any('/editprofile', 'HomeController@editprofile');

Route::any('/requestlisting', 'RequestProfController@request');
Route::any('subcat/ajax/{id}', 'HomeController@subcatajax');
Route::any('dist/ajax/{id}', 'HomeController@distajax');
Route::any('city/ajax/{id}', 'HomeController@cityajax');