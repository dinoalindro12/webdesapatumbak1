<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerangkatController;

// Route untuk Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Route untuk Profil Desa
Route::prefix('profil-desa')->group(function () {
    Route::get('/', function () {
        return view('profil-desa.index');
    })->name('profil-desa.index');
    
    Route::get('sejarah', function () {
        return view('profil-desa.sejarah');
    })->name('profil-desa.sejarah');
    
    Route::get('visi-misi', function () {
        return view('profil-desa.visi-misi');
    })->name('profil-desa.visi-misi');
    
    Route::get('struktur-organisasi', [PerangkatController::class, 'struktur'])->name('profil-desa.struktur-organisasi');
    
    Route::get('perangkat-desa', [PerangkatController::class, 'index'])->name('profil-desa.perangkat-desa');
    Route::get('bumdes', [BumdesController::class, 'index'])->name('profil-desa.bumdes');
});

// Route untuk Layanan
Route::prefix('layanan')->group(function () {
    Route::get('/', function () {
        return view('layanan.index');
    })->name('layanan.index');
    
    Route::get('kesehatan', function () {
        return view('layanan.kesehatan');
    })->name('layanan.kesehatan');
    
    Route::get('pendidikan', function () {
        return view('layanan.pendidikan');
    })->name('layanan.pendidikan');
    
    Route::get('pertanian', function () {
        return view('layanan.pertanian');
    })->name('layanan.pertanian');

    Route::get('demografi', function () {
        return view('layanan.pertanian');
    })->name('layanan.demografi');

    Route::get('surat-menyurat', [SuratController::class, 'create'])->name('layanan.surat-menyurat');
    Route::post('surat-menyurat', [SuratController::class, 'store'])->name('layanan.surat-menyurat.store');
});

// Route untuk Berita & Kegiatan
Route::prefix('berita-kegiatan')->group(function () {    
    Route::get('berita-kegiatan.berita-terkini', [BeritaController::class, 'showindex'])->name('berita-kegiatan.berita-terkini');
    Route::get('{slug}', [BeritaController::class, 'show'])->name('berita-kegiatan.show');
    Route::get('agenda-kegiatan', function () {
        return view('berita-kegiatan.agenda-kegiatan');
    })->name('berita-kegiatan.agenda-kegiatan');
    Route::get('pengumuman', function () {
        return view('berita-kegiatan.pengumuman');
    })->name('berita-kegiatan.pengumuman');
});

// Route untuk Galeri
Route::get('galeri', function () {
    return view('galeri.index');
})->name('galeri');
Route::get('kontak', function () {
    return view('kontak.index');
})->name('kontak');



// Route untuk Kontak
// Publik: hanya bisa membuat pengaduan
Route::get('kontak/create', [KontakController::class, 'create'])->name('kontak.create');
Route::post('kontak', [KontakController::class, 'store'])->name('kontak.store');


// Route untuk surat-menyurat
Route::get('layanan/surat-menyurat', [SuratController::class, 'create'])
    ->name('layanan.surat-menyurat');

// Publik: hanya bisa membuat surat
Route::middleware(['auth', 'verified'])->prefix('surat-menyurat')->group(function () {
    Route::get('/', [SuratController::class, 'index'])->name('surat-menyurat.index');
    Route::post('/', [SuratController::class, 'store'])->name('surat-menyurat.store');
    Route::get('/{surat}', [SuratController::class, 'show'])->name('surat-menyurat.show');
    Route::get('/{surat}/edit', [SuratController::class, 'edit'])->name('surat-menyurat.edit');
    Route::delete('/{surat}', [SuratController::class, 'destroy'])->name('surat-menyurat.destroy');
});

// Admin: bisa melihat, detail, dan menghapus pengaduan
Route::middleware(['auth', 'verified'])->prefix('kontak')->group(function () {
    Route::get('/', [KontakController::class, 'index'])->name('kontak.index');
    Route::get('/{kontak}/show', [KontakController::class, 'edit'])->name('kontak.edit');
    Route::delete('/{kontak}/destroy', [KontakController::class, 'destroy'])->name('kontak.destroy');
    Route::get('kontak/show', [KontakController::class, 'show'])->name('kontak.show');
    Route::get('/surat-menyurat/{id}/create', [SuratController::class, 'createSurat'])
    ->name('surat-menyurat.create');
});
// Route untuk Dashboard Admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [BeritaController::class, 'index'])->name('dashboard');
    Route::resource('berita', BeritaController::class)->except(['show']);
    
    Route::get('surat-menyurat', [SuratController::class, 'index'])->name('surat-menyurat.index');
    Route::post('surat-menyurat', [SuratController::class, 'store'])->name('surat-menyurat.store');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';