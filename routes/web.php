<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

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

Route::get('/', [Controller::class, 'login'])->name('login');

Route::post('/actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
// Route::post('/actionlogin', function($data) {
//     $data = request()->all();
//     dd($data);
// });

Route::middleware('auth')->group(function () {
    Route::get('actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout');
    Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
});