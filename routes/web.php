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

Route::get('/trainee', 'TraineeController@index')->name('trainee');
Route::post('/add_trainee', 'TraineeController@add_trainee')->name('add_trainee');

Route::get('/teacher', 'TeacherController@index')->name('teacher');
Route::get('/training', 'TrainingController@index')->name('training');
