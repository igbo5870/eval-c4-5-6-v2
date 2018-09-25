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

Route::get('/update_article', function () {
    return view('update_article');
});

Route::resource('articles', 'ArticlesController', [
    'except' => 'show',
]);
