<?php

/**
* Auth: quyet@webviet.vn
* Date: 26/05/2018
* Des : Routes Backend, Frontend, Api
**/

Auth::routes();

// Login
Route::get(LINK_BACKEND . '/login', ['as' => 'getLogin', 'uses' => 'Backend\HomeController@getLogin']);
Route::post(LINK_BACKEND . '/login', ['as' => 'postLogin', 'uses' => 'Backend\HomeController@postLogin']);
Route::get(LINK_BACKEND . '/logout', ['as' => 'getLogout', 'uses' => 'Backend\HomeController@getLogout']);

Route::group(array('prefix' => '/', 'middleware' => 'auth'), function () {
    // Home page
    Route::match(['get','post'], LINK_BACKEND, array('as'=>LINK_BACKEND, 'uses'=>'Backend\HomeController@index'));

    // Manager Admin
    Route::match(['get', 'post'], LINK_BACKEND . '/users', array('as'=>'users.index', 'uses'=>'Backend\UsersController@index'));
    Route::match(['get', 'post'], LINK_BACKEND . '/users/edit/{id}', ['as' => 'users.edit', 'uses' => 'UserController@edit']);


   //Manager Customer
    Route::match(['get', 'post'], LINK_BACKEND . '/customer', array('as'=>'customer.index', 'uses'=>'Backend\CustomerController@index'));

    // Route::match(['get', 'post'], LINK_BACKEND . '/edit_cus', array('as'=>'customer.edit', 'uses'=>'Backend\CustomerController@edit'));

   

   //create Customer
    Route::match(['get', 'post'], LINK_BACKEND . '/add_cus', array('as'=>'customer.add', 'uses'=>'Backend\CustomerController@create'));

    Route::match(['get', 'post'], LINK_BACKEND . '/post.customer', array('as'=>'post.customer', 'uses'=>'Backend\CustomerController@store'));
   

   //edit Customer
    Route::match(['get', 'post'], LINK_BACKEND . '/edit.customer/{id}', array('as'=>'edit.customer', 'uses'=>'Backend\CustomerController@edit'));
  
    Route::match(['get', 'post'], LINK_BACKEND . '/customer/edit/post/{id}', array('as'=>'post', 'uses'=>'Backend\CustomerController@update'));
   // delete Customer
   
    Route::match(['get', 'post'], LINK_BACKEND . '/customer/delete/{id}', array('as'=>'customer/delete', 'uses'=>'Backend\CustomerController@destroy'));
  //show Customer
  Route::match(['get', 'post'], LINK_BACKEND . '/customer/show/{id}', array('as'=>'show.customer', 'uses'=>'Backend\CustomerController@show'));
  //upload file

  Route::match(['get', 'post'], LINK_BACKEND . '/file/upload/{id}/{type}', array('as'=>'file/upload', 'uses'=>'Backend\FileController@upload'));
 

  Route::get('/file/customer/{path}', ['as'=>'file/show']);

  Route::match(['get', 'post'], LINK_BACKEND . '/file/delete/{id}/{id_other}', array('as'=>'file/delete', 'uses'=>'Backend\FileController@delete'));

  Route::match(['get', 'post'], LINK_BACKEND . '/file/edit/{id}', array('as'=>'file/edit', 'uses'=>'Backend\FileController@edit'));


Route::match(['get', 'post'], LINK_BACKEND . '/file/update/{id}/{id_other}', array('as'=>'file/update', 'uses'=>'Backend\FileController@update'));
 
});
