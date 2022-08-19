<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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




Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');

Route::get('/addemployee', [EmployeeController::class, 'addemployee'])->name('addemployee');
Route::post('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/showemployee/{id}', [EmployeeController::class, 'showemployee'])->name('showemployee');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [EmployeeController::class, 'deletedata'])->name('deletedata');