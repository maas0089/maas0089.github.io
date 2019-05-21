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

//Publicly accessible pages

Route::get('/home', 'PagesController@index')->name('home');
Route::get('/', 'PagesController@index');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/500', 'PagesController@error500')->name('error500');
Route::get('/403', 'PagesController@error403')->name('error403');

//Pages that need authorization

Auth::routes();

Route::get('/beroepsbeeld', 'AuthController@beroepsbeeld')->name('beroepsbeeld');

Route::get('/motivatie', 'AuthController@motivation')->name('motivation');

Route::get('/profiel', 'AuthController@profile')->name('profile');

Route::get('/template', 'AuthController@template')->name('template');

Route::resource('courses', 'TermsController');

Route::resource('opdrachten', 'AssignmentController')->parameters([
    'opdrachten' => 'assignment']);

Route::get('/logout', 'AuthController@logout');


