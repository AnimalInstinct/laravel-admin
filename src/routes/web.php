<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'YourVendor\\AdminPanelPackage\\Controllers'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
