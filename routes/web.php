<?php



// Main Contoller

Route::post('/enter-data', 'ProjectController@enterData');

Route::get('/search', 'ProjectController@search');
Route::get('/search-process', 'ProjectController@searchProcess');




