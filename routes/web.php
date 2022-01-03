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
    return view('auth.login');                  ;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::any('/employee_task',[App\Http\Controllers\EmployeeController::class,'index']);
Route::view('/employee_form','admin-panel.emplForm');

Route::any('/show_data',[App\Http\Controllers\EmployeeController::class,'viewdata']);
Route::view('/view_data','view');

Route::any('/chart',[App\Http\Controllers\EmployeeController::class,'chart']);
Route::view('/weekly_report','weekly_chart');

