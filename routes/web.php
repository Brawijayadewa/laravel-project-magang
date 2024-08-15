<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
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


Route::get('/login', [AuthController::class, 'loginIndex'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::get('/register', function () {
    return view('register/index');
});

Route::get('/salesCall', function(){
    return view('salesCallReport.index');
}); 