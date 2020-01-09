<?php
/**
 * Currencymanger
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Currencymanager'], function () {
        Route::resource('currencymanagers', 'CurrencymanagersController');
        //For Datatable
        Route::post('currencymanagers/get', 'CurrencymanagersTableController')->name('currencymanagers.get');
    });
    
});