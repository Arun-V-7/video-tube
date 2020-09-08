<?php
Route::get('/', 'DashboardController@dashboard');
Route::get('/video/{id}', 'DashboardController@video');

