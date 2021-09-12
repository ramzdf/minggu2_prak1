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
    echo "selamat datang";
});
Route::get('/about', function (){
    echo "NIM : 2031710114 <br>";
    echo "NAMA : Mohamad Zidfi Rohmatu Romadhon";
});
Route::get('/articles/{id}', function($id){
    echo "Halaman Artikel Dengan ID", $id;
});