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

/*Route::get('/', function () {
    return view('auth.login');
});*/


Auth::routes();
//Pagina Login/inicial
Route::get('/', 'HomeController@index')->name('index');

//Pagina admin
Route::get('/adm', 'admController@index')->name('adm_index');

//Pagina Level
Route::get('/level','LevelController@index')->name('Level_index');

//Pagina Ranking
Route::get('/ranking','RangkingController@index')->name('Ranking_index');

//Pagina Game 
Route::get('/game','GameController@index')->name('Game_index');

