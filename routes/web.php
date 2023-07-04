<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('Home');
// });

Route::get('admin/user/login',[LoginController::class, 'index1']);
Route::post('admin/user/login/store',[LoginController::class, 'store']);


Route::get('admin/main',[MainController::class, 'index'])->name('admin');
