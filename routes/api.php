<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticationController;

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

//Public Route
Route::post('/login' , 'AuthenticationController@login')->name('login');

Route::post('/register', 'AuthenticationController@register')->name('register');

//Private Route
Route::middleware('auth:api')->group(function() {
   Route::get('/logout', 'AuthenticationController@logout')->name('logout');

   Route::get('/user/{id}', 'UserController@show');

   Route::post('/profile/{id}' , 'ProfileController@update')->name('updateprofile');

   Route::get('/tags', 'TagController@show')->name('tags');

   Route::post('/mytags', 'MusicianTagController@update')->name('mytags');

});
