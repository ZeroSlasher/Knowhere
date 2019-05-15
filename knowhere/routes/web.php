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
Route::group(['middleware' => ['revalidate', 'usersession']], function () {

// });

// Route::group(['middleware' => 'revalidate'], function () {
    // Routes that want to revalidate

//Dashboard
    Route::any('/admindashboard', 'DashController@admindash')->name('admindashboard');
    Route::any('/ownerdashboard', 'DashController@owndash')->name('ownerdashboard');
    Route::any('/userdashboard', 'DashController@userdash')->name('userdashboard');

    Route::any('/approveoutlet', 'AdminController@approveoutlet')->name('approveoutlet');
    Route::any('/paymentinfo', 'AdminController@paymentinfo')->name('paymentinfo');
    Route::any('/rqstapprove', 'RequestProfController@rqstapprove')->name('rqstapprove');
    Route::any('/rqstdisapprove/{id}', 'RequestProfController@rqstdisapprove')->name('rqstdisapprove/{id}');
    Route::any('/outletmanagement', 'AdminController@outletmanagement')->name('outletmanagement');

    Route::any('/usermanagement', 'AdminController@usermanagement')->name('usermanagement');
    Route::any('/userblock', 'UOmngController@userblock')->name('/userblock');
    Route::any('/ownerblock', 'UOmngController@ownerblock')->name('/ownerblock');

    Route::any('/editpost/{id}', 'OwnerController@editpost')->name('editpost');
    Route::any('/updatepost', 'OwnerController@updatepost')->name('/updatepost');
    Route::post('storeimg', 'OwnerController@storeimg')->name('/storeimg');
    Route::any('/editpostimg/{id}', 'OwnerController@editpostimg')->name('editpostimg');
    Route::any('/deleteupload/{id}', 'OwnerController@deleteupload')->name('deleteupload');

    Route::any('/editprofile', 'OwnerController@editprofile')->name('editprofile');
    Route::any('/updateownerprofile', 'OwnerController@updateownerprofile')->name('updateownerprofile');
    Route::any('/resetpwd', 'OwnerController@resetopwd')->name('resetpwd');
    Route::any('/mypostings', 'OwnerController@mypostings')->name('mypostings');

    Route::any('/changepassword', 'OwnerController@changepassword')->name('changepassword');
    Route::any('/Addposting', 'PostController@Addposting')->name('Addposting');
    Route::any('/postingcheck', 'PostController@postingcheck')->name('postingcheck');
    Route::any('/checkpostexist', 'PostController@checkpostexist')->name('checkpostexist');

    Route::any('/addpost', 'PostController@addpost')->name('addpost');
    Route::any('/deletepost/{id}', 'PostController@deletepost')->name('deletepost');
    Route::any('/removepost', 'PostController@removepost')->name('removepost');
    Route::any('/addloc', 'OwnerController@addloc')->name('addloc');
    Route::any('/myads', 'OwnerController@myads')->name('myads');
    Route::any('/add_ad', 'OwnerController@addad')->name('addad');
    Route::any('/add_advert', 'OwnerController@addadvert')->name('addadvert');
    Route::any('/deletead/{id}', 'OwnerController@deletead')->name('deletead');
    Route::any('/edit_s_ad/{id}', 'OwnerController@edit_s_ad')->name('edit_s_ad');
    Route::any('/payment/{id}', 'OwnerController@payment')->name('payment');
    Route::any('/dopayment', 'OwnerController@dopayment')->name('dopayment');
    Route::any('/messages', 'OwnerController@messages')->name('messages');
    Route::any('/sendreplay', 'OwnerController@sendreplay')->name('sendreplay');
    Route::any('/editad/{id}', 'OwnerController@editad')->name('editad');
    Route::any('/hidead/{id}', 'OwnerController@hidead')->name('hidead');
    
});

Route::any('/', 'HomeController@index')->name('/');
Route::any('/forgotpwd', 'HomeController@forgot')->name('forgotpwd');
Route::any('/register', 'UserRegController@register')->name('register');
Route::any('/login', 'LoginController@login')->name('login');
Route::any('/logout', 'LoginController@logout')->name('logout');
Route::any('/requestlisting', 'RequestProfController@request')->name('requestlisting');
Route::any('/searchaction', 'PostController@searchaction')->name('searchaction');

Route::any('/report/{id}', 'PostController@report')->name('report');
Route::any('/suggest/{id}', 'PostController@suggest')->name('suggest');
Route::any('/fetchmsg', 'OwnerController@fetchmsg')->name('fetchmsg');
Route::any('/fetchads', 'HomeController@fetchads')->name('fetchads');

Route::any('/fetchservice/{id}', 'OwnerController@fetchservice')->name('fetchservice');
Route::any('/fetchloc', 'HomeController@fetchloc')->name('fetchloc');
Route::any('/fetchlocal/{id}', 'HomeController@fetchlocal')->name('fetchlocal');

Route::any('/postdetails/{id}', 'PostController@postdetails')->name('postdetails');
Route::any('/addreview', 'PostController@addreview')->name('addreview');

Route::any('/mypost', 'HomeController@mypost')->name('mypost');

Route::any('/howitworks', 'HomeController@howitworks')->name('howitworks');
Route::any('/loading', 'HomeController@loading')->name('loading');
Route::any('/loadcomplete', 'HomeController@loadcomplete')->name('loadcomplete');

Route::any('/about', 'HomeController@about')->name('about');
Route::any('/services', 'HomeController@services')->name('services');
Route::any('/faq', 'HomeController@faq')->name('faq');
Route::any('/contact', 'HomeController@contact')->name('contact');
Route::any('/undermaintainence', 'HomeController@undermaintainence')->name('undermaintainence');
Route::any('/404', 'HomeController@notfound')->name('404');
Route::any('/pricing', 'HomeController@pricing')->name('pricing');

Route::any('/viewpost', 'HomeController@viewpost')->name('viewpost');
Route::any('/privacy', 'HomeController@privacy')->name('privacy');
Route::any('/categories', 'HomeController@categories')->name('categories');
Route::any('/listing', 'HomeController@listing_list')->name('listing');

Route::any('/posting', 'HomeController@posting')->name('posting');
Route::any('/offer', 'HomeController@offer')->name('offer');
Route::any('/comingsoon', 'HomeController@coming')->name('comingsoon');

Route::any('subcat/ajax/{id}', 'HomeController@subcatajax')->name('subcatajax');
Route::any('dist/ajax/{id}', 'HomeController@distajax')->name('distajax');
Route::any('city/ajax/{id}', 'HomeController@cityajax')->name('cityajax');
Route::any('/mailcheck/{id}', 'HomeController@mailcheck')->name('mailcheck');
Route::any('/mailcheckr/{semail}/{id}', 'HomeController@mailcheckr')->name('mailcheckr');
Route::any('/mailverify/{id}', 'HomeController@mailverify')->name('mailverify');
Route::any('/verifycode/{vcode}/{vmail}', 'HomeController@verifycode')->name('verifycode');

Route::any('/refreshcaptcha', 'HomeController@refreshCaptcha')->name('verifycode');

// Password reset link request routes...

Route::POST('password/email ', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::GET('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::POST('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::GET('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::any('/dummy', 'HomeController@dummy')->name('dummy');