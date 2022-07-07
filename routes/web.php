<?php

use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\EditMatpelController;
use App\Http\Controllers\EditSiswaController;
use App\Http\Controllers\LihatRaporController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\RaporSiswaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TambahMatpelController;
use App\Http\Controllers\TambahRaporController;
use App\Http\Controllers\TambahSiswaController;
use App\Http\Controllers\UbahPasswordController;
use Illuminate\Support\Facades\App;
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

Route::get('/login', '\App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', '\App\Http\Controllers\AuthController@proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('siswa', 'App\Http\Controllers\SiswaController@index')->name('siswa');
Route::get('siswa/{id}', 'App\Http\Controllers\SiswaController@edit')->name('siswa-edit');
Route::get('editmatpel/{id}', 'App\Http\Controllers\MataPelajaranController@edit')->name('matpel-edit');
Route::post('updatesiswa', 'App\Http\Controllers\SiswaController@updatesiswa',);
Route::post('updatemapel', 'App\Http\Controllers\MataPelajaranController@updatemapel',);
Route::get('matpel', '\App\Http\Controllers\MataPelajaranController@matpel');

Route::resource('tambahsiswa', TambahSiswaController::class);
Route::resource('editsiswa', EditSiswaController::class);
Route::resource('tambahmatpel', TambahMatpelController::class);
Route::resource('editmatpel', EditMatpelController::class);
Route::resource('rapor', RaporController::class);
Route::resource('tambahrapor', TambahRaporController::class);
Route::resource('raporsiswa', RaporSiswaController::class);

Route::resource('dashboardUser', DashboardUserController::class);
Route::resource('ubahpassword', UbahPasswordController::class);
Route::resource('lihatrapor', LihatRaporController::class);


Route::get('dashboard', function () {
    return view('admin/dashboard');
});
// Route::get('/dashboard', function () {
//     return view('sb-admin/app');
// });
