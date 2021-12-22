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


Route::livewire('/services', 'services-component')->layout('layouts.master')->section('body')->name('services');
Route::livewire('/shop', 'shop-component')->layout('layouts.master')->section('body')->name('shop');
Route::livewire('/about-us', 'about-us')->layout('layouts.master')->section('body')->name('about-us');