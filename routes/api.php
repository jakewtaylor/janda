<?php

use Illuminate\Http\Request;

Route::post('login', 'AuthController@login');

Route::group(['middleware' => ['jwt.auth'/*, 'jwt.refresh'*/]], function () {
    Route::get('/brands/{brand}/stock', 'BrandController@showStock');
    Route::apiResources([
        'practices' => 'PracticeController',
        'brands' => 'BrandController',
        'manufacturers' => 'ManufacturerController',
        'stocks' => 'StockController',
    ]);
});
