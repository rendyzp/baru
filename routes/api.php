<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Models\Students;

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

Route::get("/kelas", [KelasController::class, "index"]); //list kelas
Route::get("/kelas/detail", [KelasController::class, "index2"]); //kelas and detail siswa
Route::post("/kelas", [KelasController::class, "store"]); //save new kelas
Route::put("/kelas/{kelasId}", [KelasController::class, "update"]); //update data kelas

Route::get("/siswa", [SiswaController::class, "index"]); //list siswa
Route::get("/siswa/detail", [SiswaController::class, "index2"]); //siswa and detail nilai per mata pelajaran
Route::get("/siswa", [SiswaController::class, "index3"]); //detail nilai per mata pelajaran
Route::post("/siswa", [SiswaController::class, "store"]); //save new nilai per mata pelajaran