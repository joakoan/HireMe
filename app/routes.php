<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as' => 'home', 'uses' =>'HomeController@Index']);

Route::get('candidates/{slug}/{id}', ['as' => 'category', 'uses'=>'CandidatesController@category']);

Route::get('candidate/{slug}/{id}', ['as' => 'candidate', 'uses'=>'CandidatesController@show']);

Route::get('sing-up', ['as' => 'sing_up', 'uses'=>'UsesController@singUp']);

Route::post('sing-up', ['as' => 'register', 'uses'=>'UsesController@register']);

Route::post('login', ['as' => 'login', 'uses'=>'AuthController@login']);



Route::group(['before'=>'auth'], function(){

    Route::get('account', ['as' => 'account', 'uses' => 'UsesController@account']);
    Route::put('account', ['as' => 'update_account', 'uses' => 'UsesController@updateAccount']);

    Route::get('profile', ['as' => 'profile', 'uses' => 'UsesController@profile']);
    Route::put('profile', ['as' => 'update_profile', 'uses' => 'UsesController@updateProfile']);

    Route::get('logout', ['as' => 'logout', 'uses'=>'AuthController@logout']);

});