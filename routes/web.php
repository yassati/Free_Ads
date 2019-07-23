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
Route::get('profile', function () {

})->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
Route::get('/profil', 'Profil\ProfilController@index')->name('profil');
Route::get('/profil/{id}/editp', 'Profil\ProfilController@editP')->where('id','[0-9]+')->name('editProfil');
Route::post('/profil/{id}/updatep', 'Profil\ProfilController@updateP')->where('id','[0-9]+');

Route::get('/profil/{id}/delete', 'Profil\ProfilController@deleteAd')->where('id','[0-9]+');
Route::get('/profil/{id}/edit', 'Profil\ProfilController@editAd')->where('id','[0-9]+');
Route::post('/profil/{id}/update', 'Profil\ProfilController@updateAd')->where('id','[0-9]+');

Route::get('ad/new', 'Post\PostController@viewNewAd');
Route::post('/ad/new', 'Post\PostController@newAd')->name('newad');
Route::get('/ad', 'Post\PostController@showAd')->name('showads');
Route::get('/ad/show/{id}', 'Post\PostController@view')->name('showad');
Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/chat/{user}', 'ChatController@show')->name('show');
Route::post('/chat/{user}', 'ChatController@store');

Route::get('/search', 'Post\PostController@searchV')->name('search');
Route::post('/search', 'Post\PostController@search');

