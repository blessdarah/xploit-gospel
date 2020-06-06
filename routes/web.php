<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::Resource("profile", "ProfilesController");
Route::Resource("events", "EventController");
Route::Resource("posts", "PostController");

// Pages route
Route::get('about', [
    'uses' => 'PagesController@about',
    'as' => 'pages.about'
]);

Route::get('contact', [
    'uses' => 'PagesController@contact', 
    'as' => 'pages.contact'
]);

Route::post('contact', [
    'uses' => 'UtilsController@contact',
    'as' => 'contact.store'
]);