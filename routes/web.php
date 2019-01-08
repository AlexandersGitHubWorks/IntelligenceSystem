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

Route::prefix('warming-up')->group(function () {

    Route::get('countdown', 'WarmingUpController@countdown')->name('countdown');
    Route::get('countdown-start', 'WarmingUpController@countdownStart')->name('countdown.start');

    Route::get('revert', 'WarmingUpController@notReady')->name('revert');

});

Route::prefix('attention')->group(function () {
    Route::get('sum', 'AttentionController@notReady')->name('sum');
});

Route::get('documentation/{section?}', 'DocumentationController@index')->name('documentation');
