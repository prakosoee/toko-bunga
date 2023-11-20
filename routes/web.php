<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BungaController;

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
    return view('user.home');
});

// Route::get('/product', function () {
//     return view('user.product', [
//         'buah' => [
//             'mangga',
//             'apel',
//             'nanas',
//             'melon',
//         ]
//     ]);
// });

Route::get('/product', [BungaController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);

Route::get('/bunga/product', [BungaController::class, 'index'])->name('bunga.view');
Route::get('/bunga/create', [BungaController::class, 'create'])->name('bunga.create')->middleware('auth');
Route::post('/bunga/store', [BungaController::class, 'store'])->name('bunga.store')->middleware('auth');
Route::post('/bunga/{bunga}', [BungaController::class, 'update'])->name('bunga.update')->middleware('auth');
Route::delete('/bunga/{bunga}', [BungaController::class, 'destroy'])->name('bunga.destroy')->middleware('auth');
Route::get('/bunga/{bunga}/edit', [BungaController::class, 'edit'])->name('bunga.edit')->middleware('auth');

// Route::get('/addBunga', function () {
//     return view('user.addBunga');
// });