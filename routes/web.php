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





Route::get('/register','registerationController@register')->name('register');
Route::post('/register','registerationController@store')->name('store');

Route::get('/login','sessionController@login')->name('login');
Route::post('/login','sessionController@check')->name('check');





Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');

Route::get('/loginadmin','adminController@loginadmin')->name('loginadmin');
Route::post('/loginenter','adminController@loginenter')->name('loginenter');

Route::get('/searching', 'HomeController@search')->name('search');
Route::get('/getsearch', 'HomeController@getsearch')->name('getsearch');
Route::get('/map','homeController@map')->name('map');

Route::get('/getPostInfo/{id}','HomeController@getpostdata')->name('getdata');

Route::get('/showpost/{id}','homeController@showpost')->name('showpost');

Route::get('/terms','homeController@terms')->name('terms');




Route::group(['middleware'=>'roles', 'roles'=>['user']],function(){

    Route::get('/','homeController@index')->name('index');

    Route::get('/newpost', 'HomeController@newpost')->name('newpost');
    Route::post('/storepost', 'HomeController@storepost')->name('storepost');
   // Route::get('/getsearch', 'HomeController@getsearch')->name('getsearch');
    Route::get('/profile','homeController@profile')->name('profile');
    Route::get('/editprofile','homeController@editprofile')->name('editprofile');
    Route::post('/editprofile','homeController@saveeditprofile')->name('saveeditprofile');
    Route::get('/logout','sessionController@destroy')->name('logout');

    Route::post('/editpost','homeController@editpost')->name('editpost');
    Route::post('/delpost','homeController@delpost')->name('delpost');

    Route::post('/edituserpassword','homeController@edituserpassword')->name('edituserpassword');





});

Route::group(['middleware'=>'roles', 'roles'=>['admin']],function(){



    Route::get('/editwebhome','adminController@editweb_home')->name('editweb_home');
    Route::post('/websitelogo','adminController@websitelogo')->name('websitelogo');
    Route::post('/websitewelcome','adminController@websitewelcome')->name('websitewelcome');
    Route::post('/animationphoto','adminController@animationphoto')->name('animationphoto');
    Route::post('/gallaryphoto','adminController@gallaryphoto')->name('gallaryphoto');
    Route::post('/info','adminController@info')->name('info');

    Route::get('/feedback','adminController@feedback')->name('feedback');
    Route::post('/deletequest','adminController@deletequest')->name('deletequest');

    Route::get('/adminaboutus','adminController@aboutus')->name('adminaboutus');
    Route::post('/saveinfo','adminController@saveinfo')->name('saveinfo');



    Route::get('/index','adminController@index')->name('index');

    Route::post('/addadmin','adminController@addadmin')->name('addadmin');
    Route::post('/editadmin','adminController@editadmin')->name('editadmin');
    Route::post('/deleteadmin','adminController@deleteadmin')->name('deleteadmin');

    Route::get('/allposts','adminController@allposts')->name('allposts');
    Route::get('/newposts','adminController@newposts')->name('newposts');
    Route::post('/deletepost','adminController@deletepost')->name('deletepost');
    Route::post('/acceptpost','adminController@acceptpost')->name('acceptpost');
    Route::post('/refusepost','adminController@refusepost')->name('refusepost');

    Route::post('/editpassword','adminController@editpassword')->name('editpassword');

    Route::get('/logoutadmin','adminController@logoutadmin')->name('logoutadmin');

    Route::get('/showterms','adminController@showterms')->name('showterms');
    Route::post('/addterm','adminController@addterm')->name('addterm');
    Route::post('/editterm','adminController@editterm')->name('editterm');
    Route::post('/deleteterm','adminController@deleteterm')->name('deleteterm');


});
