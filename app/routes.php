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


Route::get('/','HomeController@getIndex');

Route::get("article/{guid}","ContentController@getShowArticle");

Route::get("category/{alias}","CategoryController@getAlias");

Route::get("tagged/{tagid}","TagController@getTaggedInfo");


// push 
Route::group(array('prefix' => 'push'), function()
{
	Route::group(array('prefix' => 'v1'), function()
	{
       Route::post('/', 'App\Push\SaveController@filterPost');
	});
});