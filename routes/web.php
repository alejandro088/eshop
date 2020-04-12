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

Route::get('/dashboard', 'Admin\AdminController@index');
Route::get('/dashboard/ct', 'Admin\CustomController@index')->name('customization.theme');

Route::get('/templates/{theme}/{page?}', function ($theme, $page = null) {

    if ($page == null)
        return view("templates.$theme.index");
        
    return view("templates.$theme.$page");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
