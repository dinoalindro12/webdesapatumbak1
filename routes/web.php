<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\PengumumanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\PertanianController;
use App\Http\Controllers\PendidikanController;


// Route untuk Beranda
Route::get('/', [BerandaController::class, 'berandauser'])->name('beranda');

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
    Route::get('perangkat-desa', [PerangkatController::class, 'index1'])->name('profil-desa.perangkat-desa');
    Route::get('bumdes', [BumdesController::class, 'index'])->name('profil-desa.bumdes');
});

// Route untuk Layanan
Route::prefix('layanan')->group(function () {
    
    Route::get('kesehatan', function () {
        return view('layanan.kesehatan');
    })->name('layanan.kesehatan');
    Route::get('layanan.user',[KesehatanController::class, 'kesehatanviewuser'])->name('kesehatan.user');
    
    Route::get('pendidikan', function () {
        return view('layanan.pendidikan');
    })->name('layanan.pendidikan');
    Route::get('pendidikan.user', [PendidikanController::class, 'userView'])->name('pendidikan.user');
    
    Route::get('pertanian', function () {
        return view('layanan.pertanian');
    })->name('layanan.pertanian');
    Route::get('umkm.user', [UmkmController::class, 'umkmuser'])->name('pendidikan.user');

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
    Route::get('pengumuman.user', [PengumumanController::class, 'pengumumanuser'])->name('pengumumanuser');
    Route::get('agenda.user',[AgendaController::class,'agendauser'])->name('agendauser');
});

// Route untuk Galeri
Route::get('galeri', function () {
    return view('galeri.index');
})->name('galeri');
Route::get('galeri', [GaleriController::class, 'galeriuser'])->name('galeriuser');


// Route::get('kontak', function () {
//     return view('kontak.index');
// })->name('kontak');


Route::get('galeri.user', [GaleriController::class, 'indexUser'])->name('galeri.user');

// Route untuk Kontak
// Publik: hanya bisa membuat pengaduan
Route::get('kontak/create', [KontakController::class, 'create'])->name('kontak.create');
Route::post('kontak', [KontakController::class, 'store'])->name('kontak.store');



// Route untuk surat-menyurat
Route::middleware(['auth', 'verified'])->prefix('surat-menyurat')->group(function () {
    Route::get('/', [SuratController::class, 'index'])->name('surat-menyurat.index');
    Route::post('/', [SuratController::class, 'store'])->name('surat-menyurat.store');
    Route::get('/{surat}', [SuratController::class, 'show'])->name('surat-menyurat.show');
    Route::get('/{surat}/edit', [SuratController::class, 'edit'])->name('surat-menyurat.edit');
    Route::delete('/{surat}', [SuratController::class, 'destroy'])->name('surat-menyurat.destroy');
});

// Admin: bisa melihat, detail, dan menghapus pengaduan
Route::middleware(['auth', 'verified'])->prefix('kontak')->group(function () {
    Route::get('/', [KontakController::class, 'index1'])->name('kontak.index');
    Route::get('/{kontak}/show', [KontakController::class, 'edit'])->name('kontak.edit');
    Route::delete('/{kontak}/destroy', [KontakController::class, 'destroy'])->name('kontak.destroy');
    Route::get('kontak/show', [KontakController::class, 'show'])->name('kontak.show');
});
// Route untuk Dashboard Admin
Route::middleware(['auth', 'verified'])->group(function () {
     Route::resource('dashboard',BerandaController::class);
    // Route::get('/dashboard', [BerandaController::class, 'index'])->name('dashboard');
    Route::resource('berita', BeritaController::class)->except(['show'])->middleware('auth');
   
// controller untuk perangkat desa
    Route::resource('perangkat', PerangkatController::class);

// controller untuk galeri
    Route::resource('galeri', GaleriController::class);
    // route untuk agenda
    Route::resource('agenda', AgendaController::class);
    // controller untuk pendidikan
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('umkm', UmkmController::class);
    // controller untuk kesehatan 
    Route::resource('kesehatan',KesehatanController::class);
    Route::get('surat-menyurat', [SuratController::class, 'index'])->name('surat-menyurat.index');
    Route::post('surat-menyurat', [SuratController::class, 'store'])->name('surat-menyurat.store');

    // controller untuk profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // controller untuk beranda
    Route::get('beranda/edit', [BerandaController::class, 'edit'])->name('components.dashboard.edit');
    Route::get('beranda/create', [BerandaController::class, 'create'])->name('components.dashboard.create');
    Route::post('beranda', [BerandaController::class, 'store'])->name('components.dashboard.store');
    Route::put('beranda/update/{beranda}', [BerandaController::class, 'update'])->name('components.dashboard.update');
});

require __DIR__.'/auth.php';