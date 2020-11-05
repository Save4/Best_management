<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//modeles
Route::get('modeles','ModelesController@index');
Route::get('modeles/create','ModelesController@create');
Route::post('modeles','ModelesController@store');
Route::get('modeles/edit/{Modele}','ModelesController@edit');
Route::put('modeles/{Modele}','ModelesController@update');
Route::post('modeles/destroy/{Modele}','ModelesController@destroy');

//marque
Route::get('marques','MarquesController@index');
Route::get('marques/create','MarquesController@create');
Route::post('marques','MarquesController@store');
Route::get('marques/edit/{Marque}','MarquesController@edit');
Route::get('marques/show/{Modele}','MarquesController@show');
Route::put('marques/{Marque}','MarquesController@update');
Route::post('marques/destroy/{Marque}','MarquesController@destroy');
