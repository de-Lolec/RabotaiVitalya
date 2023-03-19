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

//Route::get('/', 'App\Http\Controllers\MainController@home');
//
//Route::get('/about', 'App\Http\Controllers\MainController@about');
//
//Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');
//
//Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

//Route::resource('rest', 'App\Http\Controllers\RestTestController')->names('restTest');
//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: ' . $id . 'Name: ' . $name;
//});

//Route::resource('posts', 'PostController')
//    ->except(['show'])
//    ->names('blog.main.posts');
//




//Auth::routes();

Route::get('/', [App\Http\Controllers\ListController::class, 'index'])->name('blog.main');

Route::get('/user/{id}/', [App\Http\Controllers\UserProfileController::class, 'index'])->name('profile');
