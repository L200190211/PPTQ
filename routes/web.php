<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PpshbController;
use App\Http\Controllers\CompPpshbController;
use App\Models\CompPpshb;

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
Route::get('/team_unit', [GuestController::class, 'team'])->name('team_unit');
Route::get('/galeri', [GuestController::class, 'galeri'])->name('galeri');
Route::get('/psshb', [GuestController::class, 'psshb'])->name('psshb');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/unit/mts', [GuestController::class, 'unitmts'])->name('unit/mts');
Route::get('/unit/ma', [GuestController::class, 'unitma'])->name('unit/ma');
Route::get('/divisi/tahfiz', [GuestController::class, 'divisitahfiz'])->name('divisi/tahfiz');
Route::get('/divisi/santri', [GuestController::class, 'divisisantri'])->name('divisi/santri');
Route::get('/regist', [PpshbController::class, 'regist'])->name('regist');
Route::post('/regist/addregist', [PpshbController::class, 'addregist'])->name('regist/addregist');
Route::get('/regist/closed', [PpshbController::class, 'registclosed'])->name('registclosed');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('/user', [UserController::class, 'profile'])->name('user');
    Route::post('/user/edituser', [UserController::class, 'EditUser'])->name('user/edituser');
    Route::get('/user/reset', [UserController::class, 'reset'])->name('reset');
    Route::post('/user/resetpassword', [UserController::class, 'resetpassword'])->name('user/resetpassword');


    Route::get('/galery', [GaleryController::class, 'galery'])->name('galery');

    Route::get('/ppshb', [PpshbController::class, 'ppshb'])->name('ppshb');
    Route::get('/ppshb/view/{id}', [PpshbController::class, 'view'])->name('view');
    Route::get('activity/main', [PpshbController::class, 'main'])->name('main');
    Route::post('/editphoto/{id}', [PpshbController::class, 'editphoto'])->name('editphoto');
    Route::post('/editrapot/{id}', [PpshbController::class, 'editrapot'])->name('editrapot');
    Route::post('/editijazah/{id}', [PpshbController::class, 'editijazah'])->name('editijazah');
    Route::post('/editskl/{id}', [PpshbController::class, 'editskl'])->name('editskl');
    Route::post('/editkk/{id}', [PpshbController::class, 'editkk'])->name('editkk');
    Route::post('/editakta/{id}', [PpshbController::class, 'editakta'])->name('editakta');
    Route::post('/editkip/{id}', [PpshbController::class, 'editkip'])->name('editkip');
    Route::post('/editsurat_sedia/{id}', [PpshbController::class, 'editsurat_sedia'])->name('editsurat_sedia');
    Route::post('/editsurat_absah/{id}', [PpshbController::class, 'editsurat_absah'])->name('editsurat_absah');
    Route::get('date/{datePpshb}', [PpshbController::class, 'date'])->name('date');
    Route::post('/dateupdate/{datePpshb}', [PpshbController::class, 'dateupdate'])->name('dateupdate');
    Route::get('/changepause/{id}', [PpshbController::class, 'changepause'])->name('changepause');
    Route::get('/changeactive/{id}', [PpshbController::class, 'changeactive'])->name('changeactive');


    Route::get('activity/complementary', [CompPpshbController::class, 'complementary'])->name('complementary');
    Route::get('/activity/complementary/add', [CompPpshbController::class, 'add'])->name('addcomp');
    Route::post('/addcompid', [CompPpshbController::class, 'addcompId'])->name('addcompId');
    Route::get('/activity/complementary/edit/{id_users}/{id}', [CompPpshbController::class, 'edit'])->name('editcomp');
    Route::post('complementary/edit/{id_users}/{id}', [CompPpshbController::class, 'editcompId'])->name('editcompId');
    Route::get('complementary/delcomp/{id_users}/{id}', [CompPpshbController::class, 'delcomp'])->name('delcomp');

    Route::get('/team', [TeamController::class, 'team'])->name('team');
    Route::get('/team/add', [TeamController::class, 'add'])->name('addteam');
    Route::post('/addteamid', [TeamController::class, 'addteamId'])->name('addteamId');
    Route::get('/team/editteam/{id}', [TeamController::class, 'editteam'])->name('editteam');
    Route::post('/editteamid/{id}', [TeamController::class, 'editteamId'])->name('editteamid');
    Route::get('/delteam/{id}', [TeamController::class, 'delteam'])->name('delteam');


    Route::get('/article', [ArticleController::class, 'article'])->name('article');
    Route::get('/article/add', [ArticleController::class, 'add'])->name('addarticle');
});
