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
    $json_str = '{"hello_url" : "/hello"}';
    $retorno = json_decode($json_str);
    return '<h1>hello_url : '.$retorno->hello_url.'</h1>';
});
Route::get('/hello', function () {
    $string = "Hello, World!";
    return '<h1>'.$string.'</h1>';
});
