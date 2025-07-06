<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect()->route('home');
});

// Route::middleware(['guest'])->group(function(){
// 	Auth::routes();
// });
Auth::routes([
	'register' => false,
	'reset' => false,
	'verify'=> false
]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);

	Route::get('/home', [HomeController::class, 'index'])->name('home');


	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);

	Route::resource('noticia', NoticiaController::class);
	Route::get('/noticia', [NoticiaController::class, 'search'])->name('noticia.search');

	Route::controller(ProfileController::class)->group(function(){
		Route::get('profile/{id}', 'edit')->name('profile.edit');
		Route::put('profile', 'udpdate')->name('profile.update');
		Route::put('profile/password', 'password')->name('profile.password');
	});

	Route::fallback(function(){
		return response()->view('fallback');
	});
});
