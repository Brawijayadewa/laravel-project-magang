<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalesCallController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('dashboard/index');
// });
Route::get('/menu', function () {
    return view('dashboard/menu');
});

Route::get('/coba', function () {
    return view("coba");
});    

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/slicing', function () {
    return view('slicing-ui');
});

Route::get('/register', function () {
    return view('register/index');
});

Route::get('/salesCall', function(){
    return view('salesCallReport.index');
}); 

Route::post('/salesCall', [SalesCallController::class, 'store'])->name('sales.store');

// Baru

Route::get('/login', [AuthController::class, 'loginIndex'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/sales-call', [SalesCallController::class, 'index'])->name('sales.index');
Route::post('/sales-call', [SalesCallController::class, 'store'])->name('sales.store');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

    // Admin user management
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user-get', [UserController::class, 'getUser'])->name('get_user');
    Route::get('/user-create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user-store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user-edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user-update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user-delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});
