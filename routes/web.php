<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/index', [TestController::class, 'index']);

// From Controller
Route::get('form', [App\Http\Controllers\FormController::class, "form"]);
Route::post('store_data', [App\Http\Controllers\FormController::class, "store_data"]);
Route::get('show', [App\Http\Controllers\FormController::class, "show"]);
