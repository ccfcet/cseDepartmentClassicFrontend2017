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

Route::get('/', 'HomePageController@load');

Route::get('/academics/faculties/', 'FacultyController@main');

// Catch all page controller
Route::get('{slug}', [
    'uses' => 'PageController@index'
])->where('slug', '([A-Za-z0-9\-\/]+)');
