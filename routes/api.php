<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List Articles

Route::get('articles', 'ArticleController@index');

//List single article
Route::get('article/{article}', 'ArticleController@show');
//Create new Article
Route::post('article', 'ArticleController@store');
//Update new article
Route::put('article', 'ArticleController@store');
//Delete article
Route::delete('article/{article}', 'ArticleController@destroy');
