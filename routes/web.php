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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Resource("profile", "ProfilesController");
Route::Resource("events", "EventController");
Route::Resource("posts", "PostController");
Route::Resource("albums", "AlbumController");

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

/* User dashboard routes */
Route::get('list-posts', [
    'uses' => 'DashboardController@list_posts',
    'as' => 'dashboard.list-posts'
]);

Route::get('list-events', [
    'uses' => 'DashboardController@list_events',
    'as' => 'events.list-events'
]);

Route::get('list-albums', [
    'uses' => 'AlbumController@list_albums',
    'as' => 'albums.list-albums'
]);

Route::get('gallery-albums', [
    'uses' => 'DashboardController@gallery_albums',
    'as' => 'gallery.albums'
]);

Route::resource('banner', "BannerController");