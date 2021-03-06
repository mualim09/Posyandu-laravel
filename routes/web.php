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
    return view('/auth/login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/search/{code}', 'BabySearchController@search');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/checks', 'CheckController@index')->name('checks');

Route::get('/home/babies', 'BabyController@index')->name('babies');
Route::get('/babies', 'BabyController@getAllBabies');
Route::post('/babies', 'BabyController@store');
Route::post('/babies/check/{id}', 'CheckController@store');

Route::get('/home/rules', 'RuleController@index')->name('rules');
Route::post('/rules', 'RuleController@store');
Route::post('/rules/edit/{id}', 'RuleController@update');
Route::post('/rules/delete/{id}', 'RuleController@destroy');

Route::get('/home/sets', 'SetController@index')->name('sets');
Route::post('/sets', 'SetController@store');
Route::post('/sets/edit/{id}', 'SetController@update');
Route::post('/sets/delete/{id}', 'SetController@destroy');