<?php

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
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('auth.nlogin');
});

Route::get('/dashboard', function () {
    return view('ndashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/team',[TaskController::class,'team'])->middleware(['auth'])->name('team');

require __DIR__.'/auth.php';
