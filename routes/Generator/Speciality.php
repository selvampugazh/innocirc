<?php
/**
 * Speciality
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Speciality'], function () {
        Route::resource('specialities', 'SpecialitiesController');
        //For Datatable
        Route::post('specialities/get', 'SpecialitiesTableController')->name('specialities.get');
    });
    
});