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

// Route::get('/', function () {
//     return view('index');

// });

// Route::get('/', 'HomeController@index')->name('index');
Route::get('/', 'IndexController@showIndex')->name('index');
Route::get('/home', 'IndexController@showIndex')->name('index');
Route::get('/index', 'IndexController@showIndex')->name('index');
// Route::get('/register', 'UserController@showRegister')->name('register');
// Route::get('/registered', 'UserController@showRegistered')->name('registered');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@showProfile')->name('profile');