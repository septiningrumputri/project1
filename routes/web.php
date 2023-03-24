<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Controller@index')->name('/');

Route::get('/about', function () {
    return view('about');
});


Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');



// 'prefix' => 'laravel-filemanager', 


Route::group(['middleware' => ['auth', 'Checklevel:1,2']], function () {

    // \UniSharp\LaravelFilemanager\Lfm::routes();

    // Route::post('/create', [App\Http\Controllers\beritaController::class, 'store'])->name('store');

    Route::get('/Utama', 'UserController@index');

    Route::get('/Kategori', 'KategoriController@index');
    Route::get('/KategoriAdd', 'KategoriController@create');
    Route::get('/KategoriEdit/{id}', 'KategoriController@edit');
    Route::put('/Kategori/{id}', 'KategoriController@update');

    Route::get('/berita', 'beritaController@index');
    Route::get('/beritaAdd', 'beritaController@create');
    Route::get('/beritaEdit/{id}', 'beritaController@edit');
    Route::put('/berita/{id}', 'beritaController@update');

    Route::group(['prefix' => 'data'], function () {
        Route::resource('Kategori', 'KategoriController');
        Route::resource('Berita', 'beritaController');
    });
    Route::get('/logout', 'LoginController@logout')->name('logout');
});
