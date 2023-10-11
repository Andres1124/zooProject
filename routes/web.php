<?php

use App\Http\Controllers\animals\AnimalsController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/request/register', [AuthController::class, 'register']);
Route::post('/request/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/home', [HomeController::class, 'show'])->middleware('auth');

// animals
Route::get('/animals', [AnimalsController::class, 'index'])->middleware('auth');
Route::post('/animals', [AnimalsController::class, 'store'])->middleware('auth');
Route::get('/animals/{animal}/delete', [AnimalsController::class, 'destroy'])->middleware('auth');
Route::get('/animals/{animal}', [AnimalsController::class, 'show'])->middleware('auth');
Route::patch('/animals/{animal}/edit', [AnimalsController::class, 'update'])->middleware('auth');


// ->middleware('auth')


