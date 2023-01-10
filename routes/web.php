<?php

use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\UserController;
use App\Models\Bejegyzesek;
use App\Models\Tevekenyseg;
use Illuminate\Support\Facades\Route;

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
});

//admin
Route::middleware( ['admin'])->group(function () {
    Route::apiResource('/users', UserController::class);
});

//alap felhaszn.
Route::middleware( ['auth.basic'])->group(function () {
    Route::apiResource('/users', UserController::class);
    Route::get('/api/bejegyzesek', [BejegyzesController::class, 'index']);
    Route::get('/api/bejegyzesek/{osztaly_id}', [BejegyzesController::class, 'show']);
    Route::post('/api/bejegyzes', [BejegyzesController::class, 'store']);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
