<?php

Route::group(['prefix' => 'profil-bpjs','middleware' => 'web'], function() {
    
    Route::get('/', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@index')->name('bpjs.index');
    Route::get('/create', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@create')->name('bpjs.create');
    Route::get('/show/{id}', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@show')->name('bpjs.show');
    Route::post('/store', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@store')->name('bpjs.store');
    Route::get('/edit/{id}', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@edit')->name('bpjs.edit');
    Route::post('/update/{id}', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@update')->name('bpjs.update');
    Route::get('/delete/{id}', 'Bantenprov\ProfilBpjs\Http\Controllers\ProfilBpjsController@destroy')->name('bpjs.delete');

});
