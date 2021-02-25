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
Route::get('/scrape', function () {
    return view('scrape');
});
Route::get('/scrape/{pageid}', 'ScrapeController@index');
Route::get('/file', function () {
    return view('file');
});
//Route::get('/file-create/{driver}', 'FileController@create');
Route::post('/file-create', 'FileController@create');
Route::post('/file-download', 'FileController@download');
Route::post('/file-get', 'FileController@get');
Route::post('/file-upload', 'FileController@store');
