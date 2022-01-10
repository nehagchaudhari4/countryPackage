<?php

Route::group(['prefix' => 'admin','namespace' => 'Indianicc\Country\Controllers', 'as' => 'admin.','middleware'=>['web']], function () {
    Route::post('countries/changeStatus', 'CountryController@changeStatus')->name('countries.change_status');
    Route::resource('countries', 'CountryController');
});

