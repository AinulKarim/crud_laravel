<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\JurusanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// // buku
// Route::get('/getbuku',[BukuController::class,'getbuku']);
// Route::get('/getid/{id}',[BukuController::class,'getid']);
// Route::post('/createbuku',[BukuController::class,'createbuku']);
// Route::put('/updatebuku/{id}',[BukuController::class, 'updatebuku']);
// Route::delete('/deletebuku/{id}',[BukuController::class, 'deletebuku']);

// jurusan
Route::get('/getjurusan',[JurusanController::class,'getjurusan']);
Route::get('/getid/{id_jurusan}',[JurusanController::class,'getid']);
Route::post('/createjurusan',[JurusanController::class,'createjurusan']);
Route::put('/updatejurusan/{id_jurusan}',[JurusanController::class, 'updatejurusan']);
Route::delete('/deletejurusan/{id_jurusan}',[JurusanController::class, 'deletejurusan']);