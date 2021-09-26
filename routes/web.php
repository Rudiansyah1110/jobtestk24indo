<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\VisitController;

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

Route::view('/', 'index');
// Route::view('/register-member', 'member-register');
// Route::view('/login-member', 'member-login')->name('show-login-member');
Route::post('/add-member', [VisitController::class, 'register_member'])->name('add-member');
Route::get('/register-success/{mail}', [VisitController::class, 'success_create']);
Route::post('/add-login', [VisitController::class, 'login_member'])->name('login-member');

Route::middleware(['middleware'=> 'PreventBackHistory'])->group( function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory'] ], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('edit-data/{idnya}', [AdminController::class, 'edit_data'])->name('admin.edit-data');
    Route::post('update-data', [AdminController::class, 'process_edit'])->name('admin.process-update');
    Route::get('delete-user/{idnya}', [AdminController::class, 'delete_data']);
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory'] ], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('edit-data/{idnya}', [UserController::class, 'edit_data'])->name('user.edit-data');
    Route::post('update-data', [UserController::class, 'process_edit'])->name('user.process-update');
    Route::get('delete-user/{idnya}', [UserController::class, 'delete_data']);
});
