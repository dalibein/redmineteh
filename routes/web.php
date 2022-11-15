<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\tovariController;
use App\Http\Controllers\velosipediController;
use App\Http\Controllers\suppliersController;

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
//useless
Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return view('1');
});
Route::get('/2', function () {
    return view('2');
});
Route::get('/3', function () {
    return view('3');
});
Route::get('/4', function () {
    return view('4');
});
Route::get('/5', function () {
    return view('5');
});
Route::get('/6', function () {
    return view('6');
});



require __DIR__.'/auth.php';
