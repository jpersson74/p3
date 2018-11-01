<?php

// Main Contoller

Route::post('/enter-data', 'ProjectController@enterData');

Route::get('/', 'ProjectController@index');
Route::get('/search-process', 'ProjectController@searchProcess');




