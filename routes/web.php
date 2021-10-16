<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\StudentController;

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
Route::get('/export', function () {
    return view('export');
});

Route::post('/csv', [ExamController::class, 'importCsv']);
Route::get('/csv', [ExamController::class, 'exportCsv']);
Route::post('/excel', [StudentController::class, 'importExcel']);
Route::get('/excel', [StudentController::class, 'exportExcel']);

