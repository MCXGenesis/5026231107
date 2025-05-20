<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pertama', function(){
    return view('pertama');
});

Route::get('/linktree', function(){
    return view('linktree');
});

Route::get('/page', function() {
    return view('page');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/landtest', function(){
    return view('landtest');
});

Route::get('/halo', function () {
    return "<h1> Lokasi baru: banyumuani</h1>";
});

Route::get('hello', [TryController::class, 'helloWorld']);
