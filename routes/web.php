<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstheticController;

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

Route::get('/', [EstheticController::class, 'index']);

Route::get('/list', [EstheticController::class, 'list']);

Route::get('/girl', [EstheticController::class, 'girl']);

Route::get('/schedule', [EstheticController::class, 'schedule']);

Route::get('/menu', [EstheticController::class, 'menu']);