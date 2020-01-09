<?php
/**
 * Language
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Language'], function () {
        Route::resource('languages', 'LanguagesController');
        //For Datatable
        Route::post('languages/get', 'LanguagesTableController')->name('languages.get');
    });
    
});