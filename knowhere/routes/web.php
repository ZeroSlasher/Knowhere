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

Route::group(['middleware' => 'revalidate'], function () {
// Routes that want to revalidate

//Dashboard
    Route::any('/admindashboard', 'DashController@admindash')->name('admindashboard');
    Route::any('/ownerdashboard', 'DashController@owndash')->name('ownerdashboard');
    Route::any('/userdashboard', 'DashController@userdash')->name('userdashboard');

    Route::any('/approveoutlet', 'AdminController@approveoutlet')->name('approveoutlet');
    Route::any('/rqstapprove', 'RequestProfController@rqstapprove')->name('rqstapprove');
    Route::any('/rqstdisapprove/{id}', 'RequestProfController@rqstdisapprove')->name('rqstdisapprove/{id}');
    Route::any('/outletmanagement', 'AdminController@outletmanagement')->name('outletmanagement');

    Route::any('/usermanagement', 'AdminController@usermanagement')->name('usermanagement');
    Route::any('/userblock', 'UOmngController@userblock')->name('/userblock');
    Route::any('/ownerblock', 'UOmngController@ownerblock')->name('/ownerblock');
});

Route::any('/', 'HomeController@index')->name('/');
Route::any('/forgotpwd', 'HomeController@forgot')->name('forgotpwd');
Route::any('/register', 'UserRegController@register')->name('register');
Route::any('/login', 'LoginController@login')->name('login');
Route::any('/logout', 'LoginController@logout')->name('logout');
Route::any('/requestlisting', 'RequestProfController@request')->name('requestlisting');

Route::any('/postdetails', 'HomeController@postdetails')->name('postdetails');
Route::any('/mypost', 'HomeController@mypost')->name('mypost');

Route::any('/howitworks', 'HomeController@howitworks')->name('howitworks');
Route::any('/about', 'HomeController@about')->name('about');
Route::any('/services', 'HomeController@services')->name('services');
Route::any('/faq', 'HomeController@faq')->name('faq');
Route::any('/contact', 'HomeController@contact')->name('contact');
Route::any('/undermaintainence', 'HomeController@undermaintainence')->name('undermaintainence');
Route::any('/404', 'HomeController@notfound')->name('404');
Route::any('/pricing', 'HomeController@pricing')->name('pricing');

Route::any('/deleteprofile', 'HomeController@deleteprofile')->name('deleteprofile');
Route::any('/viewpost', 'HomeController@viewpost')->name('viewpost');
Route::any('/privacy', 'HomeController@privacy')->name('privacy');
Route::any('/categories', 'HomeController@categories')->name('categories');
Route::any('/listing', 'HomeController@listing_list')->name('listing');

Route::any('/posting', 'HomeController@posting')->name('posting');
Route::any('/posting1', 'HomeController@posting1')->name('posting1');
Route::any('/payment', 'HomeController@payment')->name('payment');
Route::any('/offer', 'HomeController@offer')->name('offer');
Route::any('/editprofile', 'HomeController@editprofile')->name('editprofile');
Route::any('/comingsoon', 'HomeController@coming')->name('comingsoon');

Route::any('subcat/ajax/{id}', 'HomeController@subcatajax')->name('subcat/ajax/{id}');
Route::any('dist/ajax/{id}', 'HomeController@distajax')->name('dist/ajax/{id}');
Route::any('city/ajax/{id}', 'HomeController@cityajax')->name('city/ajax/{id}');
Route::any('/mailcheck/{id}', 'RequestProfController@mailcheck')->name('mailcheck/{id}');

// Password reset link request routes...

Route::POST('password/email ', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::GET('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::POST('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::GET('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');