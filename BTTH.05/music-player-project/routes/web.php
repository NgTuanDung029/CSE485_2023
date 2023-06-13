<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacGiaController;
use App\Http\Controllers\TheLoaiController;
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

Route::get('/', function () {
    return view('welcome');
});

// Tac gia
Route::prefix('tacgia')->group(function () {
    // C: create - POST
    Route::get('/them', [TacGiaController::class, 'createTacGia'])->name('tacgia.them');
    Route::post('/', [TacGiaController::class, 'storeTacGia'])->name('tacgia.luu');
    // R: read - GET
    Route::get('/', [TacGiaController::class, 'getDsTacGia'])->name('tacgia.ds');
    Route::get('/thongtin/{id}', [TacGiaController::class, 'getTacGiaById'])->name('tacgia.thongtin');
    // U: update - PUT/PATCH
    Route::get('/thongtin/{id}/chinhsua', [TacGiaController::class, 'editTacGia'])->name('tacgia.sua');
    Route::put('/thongtin/{id}', [TacGiaController::class, 'updateTacGia'])->name('tacgia.capnhat');
    // D: delete - DELETE
    Route::get('/thongtin/{id}/xoa', [TacGiaController::class, 'deleteTacGia']);
    Route::delete('thongtin/{id}/xoa', [TacGiaController::class, 'confirmDeleteTacGia'])->name('tacgia.xoa');
});

// The Loai
Route::prefix('theloai')->group(function () {
    // C: create - POST
    Route::get('/them', [TheLoaiController::class, 'createTheLoai']);
    Route::post('/', [TheLoaiController::class, 'storeTheLoai'])->name('theloai.luu');
    // R: read - GET
    Route::get('/', [TheLoaiController::class, 'getDsTheLoai'])->name('theloai.ds');
    Route::get('/thongtin/{id}', [TheLoaiController::class, 'getTheLoaiById']);
    // U: update - PUT/PATCH
    Route::get('/thongtin/{id}/chinhsua', [TheLoaiController::class, 'editTheLoai']);
    Route::put('/thongtin/{id}', [TheLoaiController::class, 'updateTheLoai'])->name('theloai.capnhat');
    // D: delete - DELETE
    Route::get('/thongtin/{id}/xoa', [TheLoaiController::class, 'deleteTheLoai']);
    Route::delete('thongtin/{id}/xoa', [TheLoaiController::class, 'confirmDeleteTheLoai'])->name('theloai.xoa');
});
