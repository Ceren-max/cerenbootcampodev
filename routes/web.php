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

//%2 bu şekilde çalışacağız
Route::get('/', 'LoginController@LoginView');
Route::post('/giris', 'LoginController@login')->name('login');//form sayesinde gideceğimiz url dir post lar


Route::get('/admin', 'AdminController@index');

//%98 bu tarz yapacağız
Route::get('/merhaba', 'HomeController@merhaba');
Route::get('/kisiler', 'HomeController@indexView')->name('person');
Route::get('/kayit', 'HomeController@createView')->name('register.view');
Route::post('/kaydet', 'HomeController@create');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id' => '[0-9]+'));
Route::post('/guncelle/{id}', 'HomeController@update')->where(array('id' => '[0-9]+'));
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id' => '[0-9]+'));
Route::get('/user-import','ExcelUploadController@userImportView')->name('user.upload');
Route::post('/user-import-post','ExcelUploadController@userImport')->name('user.import');

Route::get('/urun-ekle','ProductController@productCreateView')->name('Product.add');
Route::post('/urun-kaydet','ProductController@productCreate')->name('Product.create');
Route::get('/urun-liste','ProductController@productIndex')->name('Product.index');


Route::get('/indir','ExcelDownloadController@userDownload');
Auth::routes();//login ve register

Route::get('/home', 'HomeController@index')->name('home');
