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


use Illuminate\Support\Facades\Route;


Route::get('/home',"HomeController@homePage");
Route::get('/',"HomeController@homePage");
Route::get('/import',"Dictionary\DictionaryController@storeFromExcel");
Route::post('/store',"Dictionary\DictionaryController@store");
Route::get('/add/word',"HomeController@addWord");
Route::get('/search',"HomeController@searchWords");
Route::post('/searchPage',"Dictionary\DictionaryController@search");
Route::get('/allWords',"Dictionary\DictionaryController@index");
