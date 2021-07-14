<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DataHandleController;
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
Route::prefix('test')->group(function () {
    Route::get('data-handle/{data}/path', [DataHandleController::class, 'handlePathVariable']);
    Route::get('data-handle/quey-string', [DataHandleController::class, 'handleQueryString']);
    Route::get('data-handle/form', [DataHandleController::class, 'returnForm']);
    Route::post('data-handle/form', [DataHandleController::class, 'processForm']);
});
