<?php
/**
 * Blogmodule
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Blogdir'], function () {
        Route::resource('blogmodels', 'BlogmodelsController');
        //For Datatable
        Route::post('blogmodels/get', 'BlogmodelsTableController')->name('blogmodels.get');
    });
    
});