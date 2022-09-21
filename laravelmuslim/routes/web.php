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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belanja', function () {
    return view('pembelian');
});

Route::resource('kategori', 'KategoriController')->middleware('auth');

Route::resource('jenis', 'JenisController')->middleware('auth');

Route::resource('merek', 'MerekController')->middleware('auth');

Route::resource('produk', 'ProdukController')->middleware('auth');

Route::get('/produk/id1', 'produkController@filterJenis')->middleware('auth');

Route::get('/produk/id2', 'produkController@filterPria')->middleware('auth');

Route::get('/produk/id3', 'produkController@filterMerek')->middleware('auth');

Route::resource('customer','CustomerController')->middleware('auth');

Route::resource('order','OrderController')->middleware('auth');

Route::resource('member','MemberController')->middleware('auth');

Route::get('/search', 'ProdukController@search')->middleware('auth');

Route::get('/koleksiproduk', 'ProdukController@koleksiproduk')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile','MemberController@profile')->middleware('auth');

Route::get('/about', 'AboutController@index')->name('about')->middleware('auth');

Route::get('/user/{id}', function ($id) {return 'ID User '.$id; })->middleware('auth');
