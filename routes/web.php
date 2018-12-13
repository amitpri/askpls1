<?php

 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index');
Route::get('/how-it-works', 'IndexController@howitworks');
Route::get('/enterprises', 'IndexController@enterprises');
Route::get('/customers', 'IndexController@customers');
Route::get('/product', 'IndexController@product');
Route::get('/engineering', 'IndexController@engineering'); 
Route::get('/it', 'IndexController@it'); 
Route::get('/customer-support', 'IndexController@customersupport'); 
Route::get('/sales', 'IndexController@sales'); 
Route::get('/marketing', 'IndexController@marketing'); 
Route::get('/human-resources', 'IndexController@humanresources'); 
Route::get('/cxo', 'IndexController@cxo'); 
Route::get('/prices', 'IndexController@prices'); 
Route::get('/faqs', 'IndexController@faqs'); 
Route::get('/contact', 'IndexController@contact'); 

Route::get('/review/default', 'ReviewController@default');
Route::get('/review/draft', 'ReviewController@draft');
Route::get('/review/save', 'ReviewController@save');
Route::get('/review/{key}', 'ReviewController@review');


Route::get('/topics', 'TopicController@index');
Route::get('/topics/default', 'TopicController@default');
Route::get('/topics/getmore', 'TopicController@getmore');
Route::get('/topics/filtered', 'TopicController@filtered');
Route::get('/topics/messages', 'TopicController@messages');
Route::get('/topics/postfeedback', 'TopicController@postfeedback'); 
Route::get('/topics/showdetails', 'TopicController@showdetails'); 

Route::get('/topics/{id}', 'TopicController@show');