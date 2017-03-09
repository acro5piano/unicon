<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


Route::group(['middleware' => 'api'], function() {
    Route::get('articles',  'ArticleController@index');
    Route::get('articles/{id}',  'ArticleController@show');
    Route::get('whoami', function() {
        return Auth::user();
    });
    Route::post('login',  'Auth\LoginController@login');
});
