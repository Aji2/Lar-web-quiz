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
    return view('home');
});*/
Route::get('/','CreatesController@home');
Route::get('create', function () {
    return view('create');
});

Route::post('insert','CreatesController@add');
Route::get('update','CreatesController@update');
Route::post('edit_student','CreatesController@edit');
Route::get('delete/{id}','CreatesController@delete');
// Route::post('edit_student', function()
//     {
//         return 'Success! ajax in laravel 5';
//     });
Route::get('/student','CreatesController@index');

Route::get('/prnpriview','CreatesController@prnpriview');
Route::get('details','CreatesController@details');
