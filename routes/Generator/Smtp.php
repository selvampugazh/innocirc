<?php
/**
 * Smtp
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Smtp'], function () {
        Route::resource('smtps', 'SmtpsController');
        //For Datatable
        Route::post('smtps/get', 'SmtpsTableController')->name('smtps.get');
    });
    
});