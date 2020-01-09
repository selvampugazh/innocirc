<?php
/**
 * Doctor
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Doctor'], function () {
        Route::resource('doctors', 'DoctorsController');
        //For Datatable
        Route::post('doctors/get', 'DoctorsTableController')->name('doctors.get');
    });
    
});