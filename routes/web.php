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

Route::get('/myportfolio', function () {
    return view('portfolio.home');
});

Route::middleware(['auth', 'can:isAdmin'])->group(function (){
    Route::get('/myportfolio/admin', function () {
        return view('portfolio.admin');
    });
});

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
