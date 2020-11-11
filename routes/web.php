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
Route::get('modeles/show/{Modele}','ModelesController@show');
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

//modeles
Route::get('categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::post('categories','CategoriesController@store');
Route::get('categories/edit/{Categorie}','CategoriesController@edit');
Route::get('categories/show/{Categorie}','CategoriesController@show');
Route::put('categories/{Categorie}','CategoriesController@update');
Route::post('categories/destroy/{Categorie}','CategoriesController@destroy');


//vehicules
Route::get('vehicules','VehiculesController@index');
Route::get('vehicules/create','VehiculesController@create');
Route::post('vehicules','VehiculesController@store');
Route::get('vehicules/edit/{Vehicule}','VehiculesController@edit');
Route::get('vehicules/show/{Vehicule}','VehiculesController@show');
Route::put('vehicules/{Vehicule}','VehiculesController@update');
Route::post('vehicules/destroy/{Vehicule}','VehiculesController@destroy');
