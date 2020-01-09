<?php
/**
 * Seo
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Seo'], function () {
        Route::resource('seos', 'SeosController');
        //For Datatable
        Route::post('seos/get', 'SeosTableController')->name('seos.get');
    });
    
});