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

Route::get('/mes_meilleurs_articles', 'App\Http\Controllers\PostController2@index')->name('articles');
Route::get('/posts/create', 'App\Http\Controllers\PostController2@create')->name('posts.create');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController2@show')->name('aa');
Route::get('/contactez-nous', 'App\Http\Controllers\PostController2@contact')->name('contact');

/* Route::get('posts', function() {

    return response()->json([

        'title' => 'mon super titre',
        'description' => 'ma super description'

    ]);
});


Route::get('/test2', function () {
    return view('test2');
});

*/