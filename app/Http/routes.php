<?php

use App\Category;
/*
*@author: poplingue
 * @description: liste des étudiants
* */
//
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', 'FrontController@index');

Route::get('single/{post_id}', 'FrontController@showSingle');

//Route::get('test', function(){
//   return Category::find(1)->posts; 
//});

Route::get('category/{category_id}', 'FrontController@showCategory');

Route::get('tag/{tag_id}', 'FrontController@showTag');

Route::controller('dashboard', 'DashboardController');

Route::resource('student', 'StudentController');