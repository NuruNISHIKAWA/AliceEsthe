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

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [EstheticController::class, 'index']);

Route::get('/list', [EstheticController::class, 'list']);

Route::get('/girl', [EstheticController::class, 'girl']);

Route::get('/schedule', [EstheticController::class, 'schedule']);

Route::get('/menu', [EstheticController::class, 'menu']);

Route::get('/access', [EstheticController::class, 'access']);

Route::get('/recruit', [EstheticController::class, 'recruit']);

Route::get('/form', [EstheticController::class, 'form']);


Route::post('/girl', [EstheticController::class, 'theraphist']);