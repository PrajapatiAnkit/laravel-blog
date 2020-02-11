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
    return view('welcome');
});*/


Route::get('/','HomeController@index');
Route::get('/add-student','StudentController@addStudent')->name('addStudent');
Route::get('/view-student','StudentController@viewStudent')->name('viewStudent');
Route::post('/saveStudent','StudentController@saveStudent')->name('saveStudent');
Route::get('/edit-student/{id}','StudentController@editStudent')->name('editStudent');
Route::get('/delete-student/{id}','StudentController@deleteStudent')->name('deleteStudent');
Route::post('/update-student/','StudentController@updateStudent')->name('updateStudent');
