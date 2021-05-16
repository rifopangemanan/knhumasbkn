<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\WikiesController;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/issue', [IssueController::class, 'index']);
Route::get('/wikies', [WikiesController::class, 'index']);


// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::get('/issue', function () {
//     return view('issue');
// });
// Route::get('/wikies', function () {
//     return view('wikies');
// });