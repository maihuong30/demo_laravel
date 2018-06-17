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
});
