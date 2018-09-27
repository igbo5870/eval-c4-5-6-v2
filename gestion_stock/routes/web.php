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

// Affichage des views

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/stats', function () {
    return view('statistics');
});

Route::get('/historical', function () {
    return view('historical');
});

Route::get('/movement', function () {
    return view('movement');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/add_article', function () {
    return view('add_article');
});

Route::get('/update_article/{id}', function () {
    return view('update_article');
});

// Passage des données pour l'affichage dans les views

Route::get('/articles', 'ArticlesController@index')->name('articles');
Route::get('/historical', 'HistoricalController@index')->name('movements');
Route::get('/add_article', 'AddArticleController@index')->name('categories');
Route::get('/movement', 'AddMovementController@index')->name('movements');
Route::get('/update_article/{id}', 'ArticlesController@updateShow');

// Route Formulaire
Route::post('/movement', 'AddMovementController@store');
Route::post('/add_article', 'ArticlesController@add');
Route::post('/update_article/{id}', 'ArticlesController@modify');
Route::post('/articles/{id}', 'ArticlesController@delete');
Route::delete('/articles/delete/{id}', 'ArticlesController@destroy');
