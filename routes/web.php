<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TracerStudyController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\VideoTutorialController;

// =====================
// Halaman utama
// =====================
Route::get('/', fn() => view('home'));

// =====================
// Profil
// =====================
Route::view('/visi-misi', 'profil.visi-misi');
Route::view('/program-kerja', 'profil.program-kerja');
Route::view('/motto', 'profil.motto');
Route::view('/struktur', 'profil.struktur');

// =====================
// Informasi Publik
// =====================
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/galeri', [GaleriController::class,'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class,'create'])->name('galeri.create');
Route::post('/galeri', [GaleriController::class,'store'])->name('galeri.store');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');

Route::get('/tracer', [TracerStudyController::class, 'index'])->name('tracer.index');
Route::post('/tracer', [TracerStudyController::class, 'store'])->name('tracer.store');

Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik.index');

// =====================
// Halaman daftar perusahaan
// =====================
Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
Route::get('/perusahaan/{perusahaan}', [PerusahaanController::class, 'show'])->name('perusahaan.show');

// =====================
// Halaman lain
// =====================
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');
Route::get('/survey', [SurveyController::class, 'index'])->name('survey.index');
Route::post('/survey', [SurveyController::class, 'store'])->name('survey.store');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// =====================
// Halaman kontak
// =====================
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'send'])->name('kontak.send');

// =====================
// Video Tutorial
// =====================
Route::get('/video-tutorial', [VideoTutorialController::class, 'index'])->name('video.tutorial');

// =====================
// Authentication (Login & Logout)
// =====================
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// =====================
// ADMIN AREA
// =====================
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Resource Routes
    Route::resource('lowongan', App\Http\Controllers\Admin\LowonganController::class);
    Route::resource('perusahaan', App\Http\Controllers\Admin\PerusahaanController::class);
    Route::resource('informasi', App\Http\Controllers\Admin\InformasiController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});
