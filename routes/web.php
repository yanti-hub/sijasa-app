<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\SirkuitController;
use App\Http\Controllers\StadionDetController;

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

// Route::get('/sirkuit', function () {
//      return view('sirkuit');
// });

// Route::get('/admin', function () {
//     return view('layout-admin.admin');
// });
<<<<<<< HEAD
Route::get('/tamu', function () {
     return view('guest.master');
 });
=======

>>>>>>> 954d3da56ed38491b4222350aacaafa8f30a1f29
// Route::get('/register', function () {
//     return view('auth.register');
// });
// Route::get('/login', function () {
//     return view('auth.login');
// });
 Route::get('/stadion-detail', function () {
     return view('view-kategori.stadion-det');
 });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
<<<<<<< HEAD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/sirkuit', [SirkuitController::class, 'sirkuit'])->name('sirkuit');
Route::get('/Stadion-detail', [StadionDetController::class, 'index'])->name('stadiondet');
=======

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/sirkuit', [SirkuitController::class, 'sirkuit'])->name('sirkuit');
>>>>>>> 954d3da56ed38491b4222350aacaafa8f30a1f29

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/sirkuit', [SirkuitController::class, 'sirkuit'])->name('sirkuit');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/Stadion-detail', [StadionDetController::class, 'index'])->name('stadiondet');

    
    // Route::get('/admin', function () {
    //     return view('layout-admin.admin');
    // })->name('admin');
});

// require __DIR__.'/auth.php';

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('auth.register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('auth.register');
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('auth.login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('auth.login');
    Route::get('/password', [PasswordResetLinkController::class, 'create'])->name('auth.forgot-password');
    Route::post('/password', [PasswordResetLinkController::class, 'store'])->name('auth.forgot-password');
});


Route::get('/branda', function () {
    return view('guest.master');
});





