<?php

use App\Http\Requests\EventDemoRequest;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DataHandleController;
use  \App\Http\Controllers\EventController;
use  \App\Http\Controllers\ApartmentController;
use  \App\Http\Controllers\DemoValidata;
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

Route::get('/table', function () {
    return view('admin/table');
});
Route::prefix('/admin')->group(function () {
    Route::get('form', function (){ return view('admin/form');});
    Route::get('table', function (){ return view('admin/table');});
});
Route::prefix('/test')->group(function () {
    Route::get('', [DemoValidata::class, 'create']);
    Route::post('', [DemoValidata::class, 'store']);
});
Route::prefix('/admin/event')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('event_list');
    Route::get('create', [EventController::class, 'create'])->name('event_create');
    Route::post('create', [EventController::class, 'store']);
    Route::get('/{id}', [EventController::class, 'show'])->name('event_detail');
    Route::get('update/{id}', [EventController::class, 'update'])->name('event_update');
    Route::post('update/{id}', [EventController::class, 'save']);
    Route::get('delete/{id}', [EventController::class, 'destroy'])->name('event_delete');

});
Route::prefix('/admin/apartment')->group(function () {
    Route::get('create', [ApartmentController::class, 'create']);
    Route::post('create', [ApartmentController::class, 'store']);
    Route::get('list', [ApartmentController::class, 'list']);
});
Route::resource('event' , EventController::class);
//Route::prefix('test')->group(function () {
//    Route::get('data-handle/{data}/path', [DataHandleController::class, 'handlePathVariable']);
//    Route::get('data-handle/quey-string', [DataHandleController::class, 'handleQueryString']);
//    Route::get('data-handle/form', [DataHandleController::class, 'returnForm']);
//    Route::post('data-handle/form', [DataHandleController::class, 'processForm']);
//});
