<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

/**
 * Registration!
 */
Route::get('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@create'
]);

/**
 * Registration!
 */
Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);
