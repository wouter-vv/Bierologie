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

Route::get('/', function () {
    return redirect('/beers');
});

Route::get('/beers', 'BeersController@show');
Route::get('/beers/{id}', 'BeersController@detail')->where('id', '[0-9]+');


Route::get('/account', 'Admincontroller@account');
Route::get('/mybeers', 'Admincontroller@mybeers');
Route::get('/logout', 'Admincontroller@logout');
Route::get('/mybeers/edit/{id}', 'Admincontroller@edit')->where('id', '[0-9]+');
Route::post('/mybeers/edit/{id}', 'Admincontroller@update')->where('id', '[0-9]+');
Route::post('/mybeers/delete', 'AdminController@delete');


Route::get('/breweries/{id}', 'BreweriesController@detail')->where('id', '[0-9]+');
Route::get('/breweries', 'BreweriesController@show');

Auth::routes();
