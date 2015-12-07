<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>['guest']], function()
{
	Route::get('signup',['uses'	=> 'AuthController@getSignup','as'=>'auth.signup']);

	Route::post('signup',['uses'	=> 'AuthController@postSignup']);

	Route::get('signin',['uses'	=> 'AuthController@getSignin','as'=>'auth.signin']);

	Route::post('signin',['uses'	=> 'AuthController@postSignin']);
});

Route::group(['middleware'=>['auth']], function()
{
	/**
	 * Home
	 */
   Route::get('/', ['uses'	=> 'HomeController@index','as'	=> 'home']);

   /**
    * Search
    */
   Route::get('search',['uses'=>'SearchController@getResults', 'as'=>'search.results']);

   /**
    * Profiles
    */
   
   Route::get('user/{username}',['uses'=>'ProfileController@index', 'as'=>'profile.index']);
   Route::get('profile/edit',['uses'=>'ProfileController@edit', 'as'=>'profile.edit']);
   Route::post('profile/edit',['uses'=>'ProfileController@update']);

   /**
    * Friends
    */
   Route::get('friends', ['uses'=>'FriendController@index', 'as'=>'friends.index']);
});

Route::get('signout',['uses'	=> 'AuthController@getSignout','as'	=> 'auth.signout']);

//TEST ROUTE::
Route::get('/test', function(){
	return redirect(route('home'))->with(['info'=>'testing the info alert']);
});