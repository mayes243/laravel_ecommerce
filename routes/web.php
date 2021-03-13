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
//refresh token 

 //User
Route::get('/','UserController@index')->name('homes');
Route::get('/aboutus','UserController@aboutus')->name('aboutus');
Route::get('/gallery','UserController@gallery')->name('gallery');
Route::get('/buynow','UserController@buynow')->name('buynow');
Route::get('/contactus','UserController@contactus')->name('contactus');
Route::post('/message','UserController@message')->name('message');
Route::get('/user/register','UserController@userregister')->name('userregister');
Route::post('/user/register/form','UserController@userstore')->name('userstore');
Route::get('/user/login','UserController@userlog')->name('userlog');
Route::post('/user/login/form','Auth\LoginController@userlogin')->name('userlogin');
Route::get('/user/logout/','Auth\LoginController@userlogout')->name('userlogout');
Route::post('/search/item','UserController@search')->name('search');



 Auth::routes(['verify' => true]);
//Admin
Route::get('/dashboard','AdminController@index')->name('dashboard');
Route::get('/register','AdminController@form')->name('registers');
Route::post('/admin/register','AdminController@adminstore')->name('adminregister');
Route::get('/admin/login','Auth\LoginController@loginn')->name('admin.login');
Route::post('/logincheck','Auth\LoginController@adminlogin')->name('logincheck');
Route::get('/delete/admin/{id}','AdminController@deleteadmin')->name('deleteadmin');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/category','AdminController@category')->name('category');
Route::get('/view/category','AdminController@viewcat')->name('viewcategory');
Route::post('/addcategory','AdminController@addcategory')->name('addcategory');
Route::get('/edit/category/{id}','AdminController@editcat')->name('editcat');
Route::post('/update/category/{id}','AdminController@updatecat')->name('updatecat');
Route::get('/delete/category/{id}','AdminController@categorydelete')->name('deletecat');
Route::get('/profile','AdminController@profile')->name('profile');
Route::get('/view','AdminController@fullsize')->name('fullsize');
Route::get('/personal/information','AdminController@personal')->name('personal');
Route::get('/edit/{id}','AdminController@editdata')->name('editdata');
Route::post('/updateadmin/{id}','AdminController@updateadmin')->name('updateadmin');
Route::get('/update/{id}','AdminController@updateprofile')->name('updateprofile');
Route::post('/updateprofile','AdminController@updatprofilestore')->name('profilestore');
Route::get('/manufacture','AdminController@manufacture')->name('manufacture');
Route::post('/register/manufacture','AdminController@manufactureregister')->name('manufactureregister');
Route::get('/view/manufacture','AdminController@viewmanufacture')->name('viewmanufacture');
Route::get('/edit/manufacture/{id}','AdminController@editmanufacture')->name('editmanufacture');
Route::post('/update/manufacture/{id}','AdminController@updatemanufacture')->name('updatemanufacture');
Route::get('/delete/manufacture/{id}','AdminController@deletemanu')->name('deletemanu');
Route::get('/addproduct','AdminController@addproduct')->name('addproduct');
Route::post('/store/product','AdminController@createproduct')->name('storeproduct');
Route::get('/show/Product','AdminController@showproduct')->name('showproduct');
Route::get('/edit/product/{id}','AdminController@editproduct')->name('editproduct');
Route::post('/update/product/{id}','AdminController@updateproduct')->name('updateproduct');
Route::get('/delete/product/{id}','AdminController@deleteproduct')->name('deleteproduct');
Route::get('/customer','AdminController@customer')->name('customer');
Route::post('/add/customer','AdminController@addcustomer')->name('addcustomer');
Route::get('/show/customer','AdminController@showcustomer')->name('showcustomer');
Route::get('/edit/customer/{id}','AdminController@editcustomer')->name('editcustomer');
Route::post('/update/customer/{id}','AdminController@updatecustomer')->name('updatecustomer');
Route::get('/delete/customer/{id}','AdminController@deletecustomer')->name('deletecustomer');
Route::get('/shipping','AdminController@shipping')->name('shipping');
Route::post('/add/shipping','AdminController@addshipping')->name('addshipping');
Route::get('/show/shipping','AdminController@viewshipping')->name('showshipping');
Route::get('/edit/shipping/{id}','AdminController@editshipping')->name('editshipping');
Route::post('/update/shipping/{id}','AdminController@updateshipping')->name('updateshipping');
Route::get('/delete/shipping/{id}','AdminController@deleteshipping')->name('deleteshipping');
Route::get('/payment','AdminController@showpayment')->name('payment');
Route::post('/add/payment','AdminController@addpayment')->name('addpayment');
Route::get('/show/payment','AdminController@viewpayment')->name('viewpayment');
Route::get('/edit/payment/{id}','AdminController@editpayment')->name('editpayment');
Route::post('/update/payment/{id}','AdminController@updatepayment')->name('updatepayment');
Route::get('/delete/payment/{id}','AdminController@deletepayment')->name('deletepayment');
Route::get('/profile/picture','AdminController@profilepicture')->name('profilepicture');
Route::get('/profile/picture/show/','AdminController@showprofilepicture')->name('showprofilepicture');
Route::get('/add/order','AdminController@order')->name('order');
Route::post('/add/order','AdminController@addorder')->name('addorder');
Route::get('/show/order','AdminController@showorder')->name('showorder');
Route::get('/order/detail','AdminController@orderdetail')->name('orderdetail');
Route::get('/edit/order/{id}','AdminController@editorder')->name('editorder');
Route::post('/update/order/{id}','AdminController@updateorder')->name('updateorder');
Route::get('/delete/order/{id}','AdminController@deleteorder')->name('deleteorder');
Route::get('/show/profile/full','AdminController@profilefullsize')->name('profilefullsize');
Route::get('/showall/message/','AdminController@showallmsg')->name('showallmsg');
Route::get('/item','AdminController@item')->name('item');
Route::post('/add/item','AdminController@additem')->name('additem');
Route::get('/show/item','AdminController@showitem')->name('showitem');
Route::get('/delete/items/{id}','AdminController@deleteitem')->name('deleteitem');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/stay/touched','UserController@stay')->name('stay');


// for notifiation read
Route::get('/notification/read/{id}','AdminController@MarkRead')->name('read');
// for mark all as Read
Route::get('/all/read','AdminController@allRead')->name('allRead');
