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

Route::get('/user', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::post('/dashboard', '\App\Http\Controllers\DashboardController@createPost');

Route::get('/dashboard/user', '\App\Http\Controllers\DashboardController@showForm')->middleware(['auth']);

Route::get('/dashboard/user/destroy/{id}', '\App\Http\Controllers\DashboardController@destroy')->middleware(['auth']);

Route::get('/dashboard/user/{user}', '\App\Http\Controllers\DashboardController@showForm')->middleware(['auth']);

Route::post('/dashboard/user/update/{id}','\App\Http\Controllers\DashboardController@update')->middleware(['auth']);


Route::get('/dashboard/user/delete-profilePic/{id}', '\App\Http\Controllers\DashboardController@destroyPic')->middleware(['auth']);

require __DIR__.'/auth.php';
