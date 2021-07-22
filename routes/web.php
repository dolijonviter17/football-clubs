<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;

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
})->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/create', [DashboardController::class, 'create'])->name('player.create');
Route::post('/create/store', [DashboardController::class, 'store'])->name('player.store');

Route::get('/clubs', [ClubsController::class, 'index'])->name('clubs.index');
Route::get('clubs/list', [ClubsController::class, 'getClubs'])->name('clubs.list');
Route::get('clubs/detail/{id}', [ClubsController::class, 'detailClub'])->name('clubs.details');
Route::get('players', [PlayersController::class, 'index'])->name('players.index');

