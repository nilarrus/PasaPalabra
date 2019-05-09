<?php

Auth::routes();
//Pagina Login/inicial
Route::get('/', 'HomeController@index')->name('home');

//Pagina Level
Route::get('/level','LevelController@index')->name('Level_index');

//Pagina Ranking
Route::get('/ranking','RangkingController@index')->name('Ranking_index');

//Pagina Game 
Route::get('/game','GameController@index')->name('Game_index');
