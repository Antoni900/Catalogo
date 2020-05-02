<?php

use Illuminate\Support\Facades\Route;

//
// Login

Route::get(
    'login',
    'Auth\LoginController@showLoginForm'
)->middleware('guest')
    ->name('login');

Route::post(
    'login',
    'Auth\LoginController@authenticate'
)->name('login.auth');

Route::post(
    'signip',
    'Auth\LoginController@signup'
)->name('signup');


Route::get(
    'logout',
    'Auth\LoginController@logout'
)->name('logout');

//
// Games

Route::get(
    '/',
    'GamesController@index'
)->name('web_home')
    ->middleware(['web', 'auth']);

Route::get(
    '/games',
    'GamesController@catalog'
)->name('web_catalog')
    ->middleware(['web', 'auth']);

Route::get(
    '/game/{gameId}/details',
    'GamesController@details'
)->name('web_details')
    ->middleware(['web', 'auth']);

Route::get(
    '/games/create',
    'GamesController@create'
)->name('web_game_create')
    ->middleware(['web', 'auth']);

Route::post(
    '/games/create',
    'GamesController@createPost'
)->name('web_game_create')
    ->middleware(['web', 'auth']);
