<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Alert;
use App\Http\Controllers\RegisterController;

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
// ------------------------------------------------- Route Admin --------------------------------------------------------- //
Route::middleware(['auth', 'role_id:1'])->group(function(){
    Route::get('/admin/beranda', [AdminController::class,'Beranda'])->name('Admin-Beranda')->middleware('auth');

    // Admin - Testimoni
    Route::get('/admin/testimoni', [AdminController::class,'Testimoni'])->name ('Testimoni')->middleware('auth');
        // Create
            Route::post('/admin/testimoni', [AdminController::class,'TambahTestimoni'])->name ('Tambah-Testimoni');
        // Update
            Route::post('/admin/testimoni/{id}', [AdminController::class,'UpdateTestimoni'])->name('Update-Testimoni');
        // Delete
            Route::get('/admin/testimoni/delete/{id}', [AdminController::class,'DeleteTestimoni'])->name('Delete-Testimoni');

    // Admin - Rute      
    Route::get('/admin/rute', [AdminController::class,'Rute'])->name ('Rute')->middleware('auth');
        // Create
            Route::post('/admin/rute', [AdminController::class,'TambahRute'])->name ('Tambah-Rute');
        // Update
            Route::post('/admin/rute/{id}', [AdminController::class,'UpdateRute'])->name('Update-Rute');
        // Delete
            Route::get('/admin/rute/delete/{id}', [AdminController::class,'DeleteRute'])->name('Delete-Rute');


    // Admin - Sewa
    Route::get('/admin/sewa-admin', [AdminController::class,'Sewa'])->name('Sewa-Admin')->middleware('auth');
        // Create nya di Pengunjung Controller makanya disini di komen
            // Route::post('/admin/sewa', [AdminController::class,'TambahSewa'])->name ('Tambah-Sewa');
        // Update
            Route::post('/admin/sewa-admin/{id}', [AdminController::class,'UpdateSewaAdmin'])->name('Update-Sewa-Admin');
        // Delete
            Route::get('/admin/sewa-admin/delete/{id}', [AdminController::class,'DeleteSewaAdmin'])->name('Delete-Sewa-Admin');


    // Admin - Detail
    Route::get('/admin/detail', [AdminController::class,'Detail'])->name('Detail')->middleware('auth');
        // Create
            Route::post('/admin/detail', [AdminController::class,'TambahDetail'])->name('Tambah-Detail');
        // Update
            Route::post('/admin/detail/{id}', [AdminController::class,'UpdateDetail'])->name('Update-Detail');
        // Delete
            Route::get('/admin/detail/delete/{id}', [AdminController::class,'DeleteDetail'])->name('Delete-Detail');


    // Admin - Blog - Kami
    Route::get('/admin/blog-kami', [AdminController::class,'Blog'])->name ('Blog')->middleware('auth');
        // Create
            Route::post('/admin/blog-kami', [AdminController::class,'TambahBlog'])->name ('Tambah-Blog');
        // Update
            Route::post('/admin/blog-kami/{id}', [AdminController::class,'UpdateBlog'])->name('Update-Blog');
        // Delete
            Route::get('/admin/blog-kami/delete/{id}', [AdminController::class,'DeleteBlog'])->name('Delete-Blog');

            
    // Admin - Kontak - kami
    Route::get('/admin/kontak-kami', [AdminController::class,'Kontak'])->name('Kontak-Kami')->middleware('auth');
        // Create nya di Pengunjung Controller makanya disini di komen
            // Route::post('/admin/kontak-kami', [AdminController::class,'TambahKontakKami'])->name ('Tambah-Kontak-Kami');
        // Update
            Route::post('/admin/kontak-kami/{id}', [AdminController::class,'UpdateKontakKami'])->name('Update-Kontak-Kami');
        // Delete
            Route::get('/admin/kontak-kami/delete/{id}', [AdminController::class,'DeleteKontakKami'])->name('Delete-Kontak-Kami');

    // Admin - User
    Route::get('/admin/user', [AdminController::class,'User'])->name('UserAdmin')->middleware('auth');
        // Update
        Route::post('/admin/user/{id}', [AdminController::class,'UpdateUserAdmin'])->name('Update-User-Admin');
        // Delete
            Route::get('/admin/user/delete/{id}', [AdminController::class,'DeleteUser'])->name('Delete-User');

});

// ---------------------------------------- Route Pengunjung --------------------------------------------------------------- //
Route::get('/', [PengunjungController::class,'Beranda'])->name('Pengunjung-Beranda');
Route::get('/beranda', [PengunjungController::class,'Beranda']);


// Tentang
Route::get('/tentang', [PengunjungController::class,'TentangKami']);



// Layanan
Route::get('/layanan', [PengunjungController::class,'Layanan']);


// Mobil
Route::get('/mobil', [PengunjungController::class,'Mobil'])->name('Mobil');


// Kontak
Route::get('/kontak', [PengunjungController::class,'Kontak'])->name('Kontak');
    // Create
        Route::post('/kontak', [PengunjungController::class,'TambahKontakKami'])->name ('Tambah-Kontak-Kami');


// Blog
Route::get('/blog', [PengunjungController::class,'Blog']);


// Kontak
// Route::get('contohblog', [PengunjungController::class,'ContohBlog']);


// User
Route::get('/user/{nama_lengkap}', [PengunjungController::class,'User'])->name('User')->middleware('auth');

    // Update Profil User
    Route::post('/user/{id}', [PengunjungController::class,'UpdateUser'])->name('Update-User')->middleware('auth');
    
    // Update Pesanan User
    Route::post('/user/edit/{id}', [PengunjungController::class,'UpdateSewaUser'])->name('Update-Sewa-User')->middleware('auth');

    // Create
    Route::post('/testi', [PengunjungController::class,'TambahTestimoni'])->name ('Tambah-Testimoni')->middleware('auth');


// Sewa
Route::get('/sewa/{id}', [PengunjungController::class,'Sewa'])->name('Sewa')->middleware('auth');

    // Create
    Route::post('/sewa/{id}', [PengunjungController::class,'TambahSewaAdmin'])->name ('Tambah-Sewa-Admin');


// Masuk
Route::get('/login', [LoginController::class,'Login'])->name('Login');
Route::post('/login', [LoginController::class,'Loginproses']);


// Daftar
Route::get('/register', [RegisterController::class,'Register'])->name('Register');
Route::post('/register', [RegisterController::class,'Registproses']);


// Logout
Route::get('/logout', [LoginController::class,'Logout'])->name('Logout');


// Profile
Route::get('/profile', [PengunjungController::class,'Profile'])->name('Profile');


// Testimoni
Route::get('/testimoni', [LoginController::class,'Logout'])->name('Logout');