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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adddata', 'PageController@data');
Route::post('/adddata/store', 'DataController@store');
Route::post('/adddata/update', 'DataController@update');
Route::get('/adddata/edit', 'DataController@edit');
Route::get('/myhome', 'PageController@home');
Route::get('/notification', 'PageController@notifications');
Route::get('/mail', 'MailDataController@index');
Route::get('/mail/create', 'MailDataController@create');
Route::post('/mail/post', 'MailDataController@store');
Route::get('/admin/surat/{id}', 'AdminController@adminsurat')->name('admin.surat');
Route::get('/admin/penduduk/{id}', 'AdminController@adminpenduduk')->name('admin.penduduk');
Route::post('/admin/penduduk/verif/', 'DataController@verification')->name('admin.penduduk.verif');
Route::post('/admin/surat/update/', 'MailDataController@adminupdate')->name('admin.surat.number');
Route::post('/admin/surat/verif/', 'MailDataController@mailverif')->name('admin.surat.verif');
Route::get('/admin/surat/ajax/{id}', 'MailDataController@ajax');