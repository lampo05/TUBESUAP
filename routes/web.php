<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PengembanganController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PenyuluhanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\IlmiahController;
use App\Models\Jurnal;
use App\Models\Masyarakat;
use App\Models\Pengembangan;
use App\Models\Publikasi;

Route::get('/list-jabatan', [JabatanController::class, 'listJabatan']);
Route::get('/list-pengembangan', [PengembanganController::class, 'listPengembangan']);
Route::get('/list-jurnal', [JurnalController::class, 'listJurnal']);
Route::get('/list-publikasi', [PublikasiController::class, 'listPublikasi']);
Route::get('/list-penyuluhan', [PenyuluhanController::class, 'listPenyuluhan']);
Route::get('/list-masyarakat', [MasyarakatController::class, 'listMasyarakat']);
Route::get('/list-ilmiah', [IlmiahController::class, 'listIlmiah']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [JabatanController::class, 'showForm']);
Route::post('/form', [JabatanController::class, 'storeForm']);
Route::get('/formpengembangan', [PengembanganController::class, 'showForm']);
Route::post('/formpengembangan', [PengembanganController::class, 'storeForm']);
Route::get('/formjurnal', [JurnalController::class, 'showForm']);
Route::post('/formjurnal', [JurnalController::class, 'storeForm']);
Route::get('/formpublikasi', [PublikasiController::class, 'showForm']);
Route::post('/formpublikasi', [PublikasiController::class, 'storeForm']);
Route::get('/formpenyuluhan', [PenyuluhanController::class, 'showForm']);
Route::post('/formpenyuluhan', [PenyuluhanController::class, 'storeForm']);
Route::get('/formmasyarakat', [MasyarakatController::class, 'showForm']);
Route::post('/formmasyarakat', [MasyarakatController::class, 'storeForm']);
Route::get('/formilmiah', [IlmiahController::class, 'showForm']);
Route::post('/formilmiah', [IlmiahController::class, 'storeForm']);
