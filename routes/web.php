<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\Offers\AddOfferController;
use App\Http\Controllers\Offers\MyOffersController;
use App\Http\Controllers\Offers\OffersController;

use App\Http\Controllers\Offers\OfferDetailsController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminUserGestionController;



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
// Route pour la mise à jour groupée des statuts des utilisateurs
Route::post('/bulk_update_status', [AdminUserGestionController::class, 'bulkUpdateStatus'])->name('bulk_update_status');

Route::post('/update_user_status/{id}', [AdminUserGestionController::class, 'updateStatus'])->name('update_user_status');

Route::get('/admin/filter-users', [AdminUserGestionController::class, 'filterUsers'])->name('filter_users');
//Route::post('/admin/update-user-status/{id}', [AdminUserGestionController::class, 'updateStatus'])->name('update_user_status');


// Route::get('/admin/filter-users', [AdminUserGestionController::class, 'filterUsers'])->name('filter_users');
// Route::post('/admin/update-user-status/{id}', [AdminUserGestionController::class, 'updateStatus'])->name('update_user_status');

Route::get('/a_home', [HomeController::class, 'home'])->middleware('admin.session')->name('a_home');


Route::get('/offers', [OffersController::class, 'index'])->name('offers.index');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');


Route::post('/admin/update-user-status', [AdminUserGestionController::class, 'updateStatus'])->name('admin.update_user_status');

Route::get('/otp', [OtpController::class, 'index'])->name('otp');
Route::post('/otp', [OtpController::class, 'optVerify'])->name('otpVerify');
Route::get('/a_user_gestion', [AdminUserGestionController::class, 'index'])->name('a_user_gestion');




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/addoffer', [AddOfferController::class, 'index'])->name('add_offer');
Route::get('/myoffers', [MyOffersController::class, 'index'])->name('myoffers');
Route::get('/offerdetails', [OfferDetailsController::class, 'index'])->name('offer_details');
Route::get('/offers', [OffersController::class, 'index'])->name('offers');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('registerUser');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginUser');
