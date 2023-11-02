<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [GuestController::class, 'beranda'])->name('beranda');
Route::get('/profile', [GuestController::class, 'profile'])->name('profile');
Route::get('/galeri', [GuestController::class, 'galeri'])->name('galeri');
Route::get('/psshb', [GuestController::class, 'psshb'])->name('psshb');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/unit/mts', [GuestController::class, 'unitmts'])->name('unit/mts');
Route::get('/unit/ma', [GuestController::class, 'unitma'])->name('unit/ma');
Route::get('/divisi/tahfiz', [GuestController::class, 'tahfiz'])->name('divisi/tahfiz');
Route::get('/divisi/santri', [GuestController::class, 'santri'])->name('divisi/santri');
Route::get('/regist', [UserController::class, 'regist'])->name('regist');
Route::post('/regist/addregist', [UserController::class, 'addregist'])->name('regist/addregist');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('/user', [UserController::class, 'profile'])->name('user');
    Route::post('/user/edituser', [UserController::class, 'EditUser'])->name('user/edituser');
    Route::get('/user/reset', [UserController::class, 'reset'])->name('reset');
    Route::post('/user/resetpassword', [UserController::class, 'resetpassword'])->name('user/resetpassword');

    Route::get('/galery', [GaleryController::class, 'galery'])->name('galery');

    Route::get('/team', [TeamController::class, 'team'])->name('team');
    Route::get('/team/add', [TeamController::class, 'add'])->name('addteam');
    Route::post('/addteamid', [TeamController::class, 'addteamId'])->name('addteamId');
    Route::get('/team/editteam/{id}', [TeamController::class, 'editteam'])->name('editteam');
    Route::post('/editteamid/{id}', [TeamController::class, 'editteamId'])->name('editteamid');
    Route::get('/delteam/{id}', [TeamController::class, 'delteam'])->name('delteam');


    Route::get('/article', [ArticleController::class, 'article'])->name('article');
});
