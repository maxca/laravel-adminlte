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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home');



Route::get('/student', 'StudentController@index')->name('student.index');
Route::get('/student/create', 'StudentController@create')->name('student.create');

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
