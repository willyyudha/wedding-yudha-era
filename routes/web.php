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
    return view('home');
});

Route::get('/admin/guest', 'GuestController@index')->name('index.admin');
Route::get('/admin/guest/create' , 'GuestController@create')->name('index.guest.create');
Route::post('/admin/guest/store' , 'GuestController@store')->name('index.guest.store');
Route::delete('/admin/guest/asjdga656dsasdgajsdg65da6s5/87a6s87d6basdhasd6a6s5d6as/delete/{id}' , 'GuestController@delete')->name('delete.this.motherfucker');

Route::get('/admin/see/the/comment' , 'ComentController@index')->name('coment.index');

Route::post('/guest/store/comment/{name}' , 'ComentController@store')->name('comment.store');
Route::get('/guest/{name}' , 'GuestController@linkedins')->name('guest.name.linkedins');

