<?php


Route::get('/','UrlShortner@index');
//Route::resource('/make','UrlstoreController');
Route::get('/input', ['as'=>'post', 'uses'=>'UrlstoreController@store']);

