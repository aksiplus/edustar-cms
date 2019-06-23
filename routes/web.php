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

Route::get('/', 'HomeController@index')->name('home');

Route::post('/tp_save', 'Admin\TenagaPendidik@store')->name('admin.store');

Route::get('gdrive', function(){
    Storage::cloud()->put('test.txt', 'Hello World');
    return 'File was saved to Google Drive';
});

Route::get('haha', function(){
    $user = App\User::all();

    return $data =
    [
        'total' => $user->count(),
        'page' => 1,
        'rows' => $user
    ];
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

    Route::group(['prefix' => 'tenaga_pendidik'], function(){

        Route::get('get_data', 'TenagaPendidik@getData')->name('admin.tenaga_pendidik.data');

        Route::get('/', 'TenagaPendidik@index')->name('admin.tenaga_pendidik');
        Route::post('/', 'TenagaPendidik@store')->name('admin.tenaga_pendidik.store');

        Route::get('/detail/{id}', 'TenagaPendidik@detail')->name('admin.tenaga_pendidik.detail');
    });


});


// Route::get('/install', 'Install@init')->name('install');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
