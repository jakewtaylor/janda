<?php

use Illuminate\Http\Request;

Route::post('login', 'AuthController@login');

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::apiResources([
        'practices' => 'PracticeController',
        'brands' => 'BrandController',
    ]);
});
