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
Route::get('marques/show/{Marque}','MarquesController@show');
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

//Route::get('vehicules/chargeMarque', 'VehiculesController@chargeMarque');


Route::get('departements','DepartementsController@index');
Route::get('departements/create','DepartementsController@create');
Route::post('departements','DepartementsController@store');
Route::get('departements/edit/{Departement}','DepartementsController@edit');
Route::get('departements/show/{Departement}','DepartementsController@show');
Route::put('departements/{Departement}','DepartementsController@update');
Route::post('departements/destroy/{Departement}','DepartementsController@destroy');


Route::get('chauffeurs','ChauffeursController@index');
Route::get('chauffeurs/create','ChauffeursController@create');
Route::post('chauffeurs','ChauffeursController@store');
Route::get('chauffeurs/edit/{Chauffeur}','ChauffeursController@edit');
Route::get('chauffeurs/show/{Chauffeur}','ChauffeursController@show');
Route::put('chauffeurs/{Chauffeur}','ChauffeursController@update');
Route::post('chauffeurs/destroy/{Chauffeur}','ChauffeursController@destroy');


Route::get('missions','MissionsController@index');
Route::get('missions/create','MissionsController@create');
Route::post('missions','MissionsController@store');
Route::get('missions/edit/{Mission}','MissionsController@edit');
Route::get('missions/show/{Mission}','MissionsController@show');
Route::put('missions/{Mission}','MissionsController@update');
Route::post('missions/destroy/{Mission}','MissionsController@destroy');

Route::get('fournisseurs','FournisseursController@index');
Route::get('fournisseurs/create','FournisseursController@create');
Route::post('fournisseurs','FournisseursController@store');
Route::get('fournisseurs/edit/{Fournisseur}','FournisseursController@edit');
Route::get('fournisseurs/show/{Fournisseur}','FournisseursController@show');
Route::put('fournisseurs/{Fournisseur}','FournisseursController@update');
Route::post('fournisseurs/destroy/{Fournisseur}','FournisseursController@destroy');



Route::get('carburants','CarburantsController@index');
Route::get('carburants/create','CarburantsController@create');
Route::post('carburants','CarburantsController@store');
Route::get('carburants/edit/{Carburant}','CarburantsController@edit');
Route::get('carburants/show/{Carburant}','CarburantsController@show');
Route::put('carburants/{Carburant}','CarburantsController@update');
Route::post('carburants/destroy/{Fournisseur}','FournisseursController@destroy');
