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

Route::resource('channel','ChannelController');
Route::get('channel/{channel}/videos','ChannelController@showChannelVideos')->name('channel.show.videos');
Route::get('channel/{channel}/playlists','ChannelController@showChannelPlaylists')->name('channel.show.playlists');
Route::get('channel/{channel}/channels','ChannelController@showChannelChannels')->name('channel.show.channels');
Route::get('channel/{channel}/about','ChannelController@showChannelAbout')->name('channel.show.about');
