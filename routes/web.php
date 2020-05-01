<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/Games','Games')->name('Games');



Route::view('/Information','Information')->name('Information');



Route::view('/Home','Home')->name('Home');



Route::view('/Contact', 'Contact')->name('Contact');



Route::view('/Gears', 'Gears')->name('Gears');