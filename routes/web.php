<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


//view

Route::get('/', 'ViewController@index')->name('/');
Route::get('/about', 'ViewController@about_page')->name('about');
Route::get('/buy', 'ViewController@buy_page')->name('buy');
Route::get('/contact', 'ViewController@contact_page')->name('contact');
Route::get('/how', 'ViewController@how_page')->name('how');
Route::get('/solution', 'ViewController@solution_page')->name('solution');
Route::get('/products', 'ViewController@product_page')->name('products');
Route::get('/products', 'ViewController@product_page')->name('products');
Route::get('/order', 'ViewController@order_page')->name('order');
Route::post('/makeOrder', 'ViewController@receive_order')->name('makeOrder');
Route::get('/viewProducts', 'ViewController@products_byCategory')->name('viewProducts');
Route::get('/productInfo', 'ViewController@products_byID')->name('productInfo');
Route::get('/productDetails', 'ViewController@products_byID')->name('productDetails');
Route::post('/sendMessage', 'ViewController@receive_message')->name('sendMessage');




//dashbaord
Route::get('/dashboard', 'AdminController@index')->name('dashboard');

//Category
Route::get('/createCategory', 'CategoryController@index')->name('createCategory');
Route::get('/manageCategory', 'CategoryController@category_data')->name('manageCategory');
Route::post('/createCategory','CategoryController@create_category')->name('createCategory');
Route::post('/updateCategory','CategoryController@update_category')->name('updateCategory');
Route::post('/deleteCategory','CategoryController@delete_category')->name('deleteCategory');
Route::post('/categoryProducts','CategoryController@products_byCategory')->name('categoryProducts');

//product
Route::get('/createProduct', 'ProductController@index')->name('createProduct');
Route::get('/uploadImage', 'ProductController@upload_page')->name('uploadImage');
Route::get('/manageProduct', 'ProductController@product_data')->name('manageProduct');
Route::get('/productDetails', 'ProductController@product_details')->name('productDetails');
Route::post('/uploadImage', 'ProductController@upload_images')->name('uploadImage');
Route::post('/updateProduct','ProductController@update_status')->name('updateProduct');
Route::post('/deleteProduct','ProductController@delete_product')->name('deleteProduct');
Route::post('/createProduct', 'ProductController@create_product')->name('createProduct');
Route::post('/updateInfo', 'ProductController@update_info')->name('updateInfo');

//update product image
Route::post('/updateImage', 'ProductController@updateImage_1')->name('updateImage');
Route::post('/updateImage2', 'ProductController@updateImage_2')->name('updateImage2');
Route::post('/updateImage3', 'ProductController@updateImage_3')->name('updateImage3');
Route::post('/updateImage4', 'ProductController@updateImage_4')->name('updateImage4');
Route::post('/updateImage5', 'ProductController@updateImage_5')->name('updateImage5');
Route::post('/updateImage6', 'ProductController@updateImage_6')->name('updateImage6');
Route::post('/updateImage7', 'ProductController@updateImage_7')->name('updateImage7');
Route::post('/updateImage8', 'ProductController@updateImage_8')->name('updateImage8');
Route::post('/updateImage9', 'ProductController@updateImage_9')->name('updateImage9');
Route::post('/updateImage10', 'ProductController@updateImage_10')->name('updateImage10');

//template_customization
Route::get('/templateHome', 'TemplateController@index')->name('templateHome');
Route::get('/templateAbout', 'TemplateController@about_page')->name('templateAbout');
Route::get('/templateLogo', 'TemplateController@logo_page')->name('templateLogo');
Route::get('/templateContact','TemplateController@contact_page')->name('templateContact');
Route::get('/templateBuy','TemplateController@buy_page')->name('templateBuy');
Route::get('/templateHowWorks','TemplateController@how_work_page')->name('templateHowWorks');
Route::get('/templateSolution','TemplateController@solution_page')->name('templateSolution');
Route::get('/templateBanner','TemplateController@banner_page')->name('templateSolution');
Route::post('/updateText', 'TemplateController@update_text')->name('updateText');
Route::post('/updateAbout', 'TemplateController@update_about')->name('updateAbout');
Route::post('/uploadLogo', 'TemplateController@upload_logo')->name('uploadLogo');
Route::post('/uploadBanner', 'TemplateController@upload_banner')->name('uploadBanner');
Route::post('/updateContact', 'TemplateController@update_contact')->name('updateContact');
Route::post('/updateBuy', 'TemplateController@update_how_buy')->name('updateBuy');
Route::post('/updateHow', 'TemplateController@update_how_works')->name('updateHow');
Route::post('/updateSolution', 'TemplateController@update_solution')->name('updateSolution');

//orders
Route::get('/orders', 'AdminController@order_page')->name('orders');
Route::POST('/checkedOrder', 'AdminController@is_checked')->name('checkedOrder');

//Notificationss

Route::get('/mails', 'NotificationController@mail_page')->name('mails');
Route::POST('/seenMessage', 'NotificationController@is_Seen')->name('seenMessage');
