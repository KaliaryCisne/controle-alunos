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

Route::prefix('v1')->namespace('Api\V1')->group(function () {
    Route::prefix('classroom')->namespace('ClassRoom')->group(function () {
        Route::get('list', 'ListController@list')->name('list');
        Route::get('students/{id}', 'ListController@students')->name('students');
        Route::post('create', 'CreateController@create')->name('create');
        Route::put('update/{id}', 'UpdateController@update')->name('update');
        Route::delete('delete/{id}', 'DeleteController@delete')->name('delete');
    });

    Route::prefix('student')->namespace('Student')->group(function () {
        Route::get('list', 'ListController@list')->name('list');
        Route::get('classes/{id}', 'ListController@classes')->name('classes');
        Route::post('create', 'CreateController@create')->name('create');
        Route::put('update/{id}', 'UpdateController@update')->name('update');
        Route::delete('delete/{id}', 'DeleteController@delete')->name('delete');
    });

    Route::prefix('admin')->namespace('Admin')->group(function () {
        Route::post('register', 'RegisterController@register')->name('register');
    });
});
