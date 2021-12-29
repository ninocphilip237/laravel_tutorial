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

use App\Http\Controllers\StudentController;

Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
// fetching data
Route::get('students', [StudentController::class, 'index']);
//edit &update
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
// delete data
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
