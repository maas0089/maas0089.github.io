<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('opdrachten', 'AssignmentController');

Route::resource('dashboard', 'CoursesController');

Route::get('/', 'PagesController@index');

Route::get('/contact', 'PagesController@contact');

Route::get('/beroepsbeeld', 'PagesController@beroepsbeeld');

Route::get('/motivatie', 'PagesController@motivation');

Route::get('/profiel', 'PagesController@profile');


