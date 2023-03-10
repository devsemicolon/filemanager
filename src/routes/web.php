<?php

Route::get('/filemanager', 'devsemicolon\filemanager\FileManagerController@index');
Route::post('/filemanager/upload', 'devsemicolon\filemanager\FileManagerController@upload');
Route::post('/filemanager/folder', 'devsemicolon\filemanager\FileManagerController@folder');
Route::post('/filemanager/delete', 'devsemicolon\filemanager\FileManagerController@delete');
Route::get('/filemanager/pagination', 'devsemicolon\filemanager\FileManagerController@pagination');
