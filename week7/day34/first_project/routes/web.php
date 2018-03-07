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

/**
 * / home -->HomeController
 * /contact -->ContactController
 * /blog -->BlogController
 * /portfolio -->PortfolioController
 */



Route::get('/', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/blog', 'Blog\BlogController@index');
Route::get('/portfolio', 'PortfolioController@index');
Route::get('/form', 'FormController@index');
Route::get('/form/create', 'FormController@create');
Route::post('/form', 'FormController@store');

Route::get('/pets', 'PetController@index');

