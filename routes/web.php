<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KegpendidikController;
use App\Http\Controllers\KegtambahanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LevelControlle;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApprovependidikController;
use App\Http\Controllers\ApprovetendikController;
use App\Http\Controllers\ApprovetutaController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\TendiktambahanController;
use App\Http\Controllers\TendikutamaController;
use App\Http\Controllers\TutatambahanController;
use App\Http\Controllers\TutautamaController;
use App\Models\Kegpendidik;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class]);
Route::get('/masuk', [LoginController::class, "show"]);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');

// Route Data Master
Route::resource('/datajurusan', JurusanController::class);
Route::resource('/datakelas', KelasController::class);
Route::resource('/datamapel', MapelController::class);
Route::resource('/datalevel', LevelControlle::class);
Route::get('/laporan', [KegpendidikController::class, 'cari']);
Route::get('/cari', [KegpendidikController::class, 'search']);

// Route Data PTK
Route::resource('/datapendidik', PendidikController::class);
Route::resource('/datatendik', TendikController::class);

// Manage Kegiatan Pendidik
Route::resource('/kegiatanpendidik', KegpendidikController::class);
Route::post('/printpendidik', [KegpendidikController::class, 'print']);
Route::resource('/kegiatantambahan', KegtambahanController::class);

// Manage Kegiatan TUTA
Route::resource('/tutautama', TutautamaController::class);
Route::resource('/tutatambahan', TutatambahanController::class);

// Manage Kegiatan Tendik/ Tenaga Kependidikan (Tata Usaha)
Route::resource('/tendikutama', TendikutamaController::class);
Route::resource('/tendiktambahan', TendiktambahanController::class);

//Approval/ Persetujuan Kepsek
Route::get('/approve/kegpendidik/utama', [ApprovependidikController::class, 'kegpendidikUtama'])->name('kegpendidikUtama');
Route::get('/approve/kegpendidik/tambahan', [ApprovependidikController::class, 'kegpendidikTambahan'])->name('kegpendidikTambahan');
Route::put('/approve/kegpendidik/update/{id}', [ApprovependidikController::class, 'update']);

Route::get('/approve/tendikutama', [ApprovetendikController::class, 'tendikUtama'])->name('tendikUtama');
Route::get('/approve/tendiktambahan', [ApprovetendikController::class, 'tendikTambahan'])->name('tendikTambahan');
Route::put('/approve/tendik/update/{id}', [ApprovetendikController::class, 'update']);

Route::get('/approve/tutautama', [ApprovetutaController::class, 'tutaUtama'])->name('tutaUtama');
Route::get('/approve/tutatambahan', [ApprovetutaController::class, 'tutaTambahan'])->name('tutaTambahan');
Route::put('/approve/tuta/update/{id}', [ApprovetutaController::class, 'update']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users',[ManageController::class, 'index']);
Route::get('/users/create',[ManageController::class, 'create']);
Route::post('/users/store', [ManageController::class, 'store']);
Route::get('/users/edit/{id}', [ManageController::class, 'edit']);
Route::put('/users/update/{id}',[ManageController::class, 'update']);
Route::get('/users/delete/{id}', [ManageController::class, 'destroy']);
 