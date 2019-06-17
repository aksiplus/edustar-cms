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
    return view('admin.partials.test');
});

Route::get('put', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
    return 'File was saved to Google Drive';
});

//Route untuk Administrator
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::get('/', 'Dashboard@index')->name('admin.dashboard');

    Route::group(['prefix' => 'ppdb'], function(){
        Route::get('/', 'PPDB@index')->name('admin.ppdb');
        // Route::get('/{id}', 'PPDB@index')->name('admin.ppdb');
    });

    Route::group(['prefix' => 'sekolah'], function(){
        Route::get('/', 'Sekolah@index')->name('admin.sekolah');
        // Route::get('/{id}', 'PPDB@index')->name('admin.ppdb');
    });


});


Route::get('/install', 'Install@init');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
