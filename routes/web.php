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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("movies", "MovieController")->middleware("auth");

Route::get("backend", "BackLoginController@getLogin")->name("backend.get");
Route::post("backend", "BackLoginController@postLogin")->name("backend.post");
Route::get("backend/logout", "BackLoginController@logout")->name("backend.logout");
Route::resource("dashboard", 'BackendController');
