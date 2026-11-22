<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\SearchjController;
use App\Http\Controllers\PeminjamanController;



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
// admin

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::group(['middleware' => 'admin'], function () {
    // Route yang hanya dapat diakses oleh admin
    Route::get('/dashboard', [DashbordController::class,'index'])->name('dashboard-index');

    Route::resource('bukus', BukuController::class);
    Route::get('/petugas', [UserController::class,'index']);
    Route::delete('/petugas/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::post('/buku', [BukuController::class,"store"])->name("buku.create");
    Route::put('/bukus/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/bukus/{id}', 'BukuController@destroy')->name('bukus.destroy');
    
    Route::put('users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('update.user','profile');
    Route::get('/users', [UserController::class, 'index'])->name('petugas.index');
    Route::put('/users/update/{id}', 'UserController@updatedata')->name('profile');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');

    Route::post('/peminjaman/store', 'PeminjamanController@store')->name('peminjaman.store');
    
    Route::put('/peminjaman/{id}/kembalikan', 'PeminjamanController@kembalikan')->name('peminjaman.kembalikan');

});

// Admin redirect to dashboard after login


Route::group(['middleware' => 'peminjam'], function () {
    // Route yang hanya dapat diakses oleh peminjam
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/buku', [BukuController::class, 'index1'])->name('buku.index');
    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/pinjam/{buku}', [PinjamanController::class, 'index'])->name('pinjam.index');
    Route::post('/pinjam', [PinjamanController::class, 'store'])->name('pinjam.store');
    Route::get('/detail/{id}', [BukuController::class, 'show']);
    Route::post('detail/{id}', [UlasanController::class, 'buatKomentar'])->name('komen.create');
});



// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();


//     // Route yang hanya dapat diakses oleh admin
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
        
//     });

//     Route::resource('bukus', BukuController::class);
//     Route::get('/petugas', [UserController::class,'index']);
//     Route::delete('/petugas/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//     Route::post('/buku', [BukuController::class,"store"])->name("buku.create");
//     Route::put('/bukus/{id}', [BukuController::class, 'update'])->name('buku.update');
//     Route::delete('/bukus/{id}', 'BukuController@destroy')->name('bukus.destroy');
    
//     Route::put('users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('update.user','profile');
//     Route::get('/users', [UserController::class, 'index'])->name('petugas.index');
//     Route::put('/users/update/{id}', 'UserController@updatedata')->name('profile');
//     Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [UserController::class, 'store'])->name('users.store');

//     Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
//     Route::get('/peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');

//     Route::post('/peminjaman/store', 'PeminjamanController@store')->name('peminjaman.store');
    
//     Route::put('/peminjaman/{id}/kembalikan', 'PeminjamanController@kembalikan')->name('peminjaman.kembalikan');



// // Admin redirect to dashboard after login



//     // Route yang hanya dapat diakses oleh peminjam
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('/buku', [BukuController::class, 'index1'])->name('buku.index');
//     Route::get('/profile', function () {
//         return view('profile');
//     });
//     Route::get('/detail/{id}', [BukuController::class, 'show']);
//     Route::post('detail/{id}', [UlasanController::class, 'buatKomentar'])->name('komen.create');
