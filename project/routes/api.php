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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
  }); */


Route::Group(['prefix' => '/v1'], function () {
    Route::post('/resetPassword', 'Front\ApiController@resetPassword')->name('front.resetPasswordForm');
    Route::post('/forgotPassword', 'Front\ApiController@forgotPassword')->name('front.forgotPasswordForm');
    Route::post('/registerUser', 'Front\ApiController@register')->name('front.registerUser');
    Route::post('/userLogin', 'User\LoginController@userLogin')->name('user.userLogin');
   
});
