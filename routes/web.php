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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/welcome', function () {
    return view('welcome');
});



//MAIn
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');


Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/register', function () {
    return view('register');
})->middleware(['auth', 'verified'])->name('register');

// TABLES
Route::get('/suppliers', function () {
    return suppliersController::suppliers();
})->middleware(['auth', 'verified'])->name('suppliers');
Route::get('/velosipedi', function () {
    return velosipediController::velosipedi();
})->middleware(['auth', 'verified'])->name('velosipedi');
Route::get('/employees', function () {
    return employeesController::employees();
})->middleware(['auth', 'verified'])->name('employees');
Route::get('/tovari', function () {
    return tovariController::tovari();
})->middleware(['auth', 'verified'])->name('tovari');
//save

Route::get('/supplierssave', function () {
    return suppliersController::supplierssave();
})->middleware(['auth', 'verified'])->name('supplierssave');
Route::get('/velosipedisave', function () {
    return velosipediController::velosipedisave();
})->middleware(['auth', 'verified'])->name('velosipedisave');
Route::get('/employeessave', function () {
    return employeesController::employeessave();
})->middleware(['auth', 'verified'])->name('employeessave');
Route::get('/tovarisave', function () {
    return tovariController::tovarisave();
})->middleware(['auth', 'verified'])->name('tovarisave');

//delete
Route::get('/delete/{id}', function ($id) {
    return tovariController::tovarisave($id);
})->middleware(['auth', 'verified'])->name('tovarisave');

Route::get('//delete/{id}', function ($id) {
    return employeesController::delete($id);
})->middleware(['auth', 'verified']);


Route::get('//delete/{id}', function ($id) {
    return velosipediController::delete($id);
})->middleware(['auth', 'verified']);


Route::get('//delete/{id}', function ($id) {
    return suppliersController::delete($id);
})->middleware(['auth', 'verified']);

//save

Route::post('employeessave/che', 'App\Http\Controllers\employeesController@che');
Route::post('tovarisave/che', 'App\Http\Controllers\tovariController@che');
Route::post('supplierssave/che', 'App\Http\Controllers\suppliersController@che');
Route::post('velosipedisave/che', 'App\Http\Controllers\velosipediController@che');

require __DIR__.'/auth.php';
