<?php

use App\Http\Controllers\RootController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ExcelCsvController;

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

Route::get('/{resource}/{id?}', [RootController::class, 'get_resources']);

// Route::get('excel-csv-file', [ExcelCsvController::class, 'index']);
// Route::get('export-excel-csv-file/{slug}', [ExcelCsvController::class, 'exportExcelCSV']);

