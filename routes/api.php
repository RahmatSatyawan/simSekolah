<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;

/*
|--------------------------------------------------------------------------
| API Routes
|-------
-------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('kelas', KelasController::class);
Route::resource('siswa', SiswaController::class);
Route::get('nilai/{siswaId}/{mataPelajaran}', [NilaiController::class, 'show']);
Route::post('nilai', [NilaiController::class, 'store']);
use Illuminate\Support\Facades\DB;

Route::get('/test-mongodb-connection', function () {
    try {
        DB::connection('mongodb')->getPdo();
        return 'Connection to MongoDB successful!';
    } catch (\Exception $e) {
        return 'Error connecting to MongoDB: ' . $e->getMessage();
    }
});

Route::get('/test-mongodb', function () {
    $data = NamaModel::all(); // Mengambil semua data dari model MongoDB
    return $data;
});
