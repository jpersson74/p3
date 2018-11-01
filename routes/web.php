<?php

//Post Route for data entry
Route::post('/enter-data', 'ProjectController@enterData');

//Main controller route
Route::get('/', 'ProjectController@index');

//Route for project search
Route::get('/search-process', 'ProjectController@searchProcess');




