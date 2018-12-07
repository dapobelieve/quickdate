<?php
// Auth Routes
Route::post('/login', 'Auth\AuthController@login');
Route::post('/register', 'Auth\AuthController@register');

// protectd routes for auht users only
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('me', 'Auth\AuthController@user');
});