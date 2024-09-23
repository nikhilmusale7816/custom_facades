<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


// Route to display all users
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route to display a single user by ID
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
