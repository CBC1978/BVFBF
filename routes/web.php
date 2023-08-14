<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminUserGestionController;
//SHIPPER ROUTE
use App\Http\Controllers\Shipper\Offers\S_AddOfferController;
use App\Http\Controllers\Shipper\Offers\S_MyOfferController;
use App\Http\Controllers\Shipper\Offers\S_OfferDetailController;
use App\Http\Controllers\Shipper\Offers\S_OfferController;
//CARRIER ROUTE
use App\Http\Controllers\Carrier\Offers\C_AddOfferController;
use App\Http\Controllers\Carrier\Offers\C_MyOfferController;
use App\Http\Controllers\Carrier\Offers\C_OfferDetailController;
use App\Http\Controllers\Carrier\Offers\C_OfferController;

//regroupement 
use App\Http\Controllers\Shipper\Offers as ShipperOffers;
use App\Http\Controllers\Carrier\Offers as CarrierOffers;
use App\Http\Controllers\Admin as AdminControllers;
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


// Routes spécifiques à l'administrateur ........................................

Route::middleware(['check.role:admin'])->group(function () {
    Route::get('/a_home', [HomeController::class, 'home'])->name('a_home');
    Route::get('/a_user_gestion', [AdminUserGestionController::class, 'index'])->name('a_user_gestion');
    Route::get('/filter_users', [AdminUserGestionController::class, 'filterUsers'])->name('filter_users');
    // ... Autres routes spécifiques à l'administrateur ...
});
Route::post('/bulk_update_status', [AdminUserGestionController::class, 'bulkUpdateStatus'])->name('bulk_update_status');



// Routes spécifiques au shipper ........................................
//Route::middleware(['check.role:shipper'])->group(function () {
    Route::get('/s_home', [HomeController::class, 'home'])->name('s_home');
    Route::get('/shipper/offers/add', [S_AddOfferController::class, 'index'])->name('s_add_offer');
    Route::get('/shipper/offers/myoffer', [S_MyOfferController::class, 'index'])->name('s_myoffer');
    Route::get('/shipper/offers/offerdetail', [S_OfferDetailController::class, 'index'])->name('s_offerdetail');
    Route::get('/shipper/offers/offer', [S_OfferController::class, 'index'])->name('s_offer');
    // ... Autres routes spécifiques au shipper ...
//});

// Routes spécifiques au carrier ....................................
//Route::middleware(['check.role:carrier'])->group(function () {
    Route::get('/c_home', [HomeController::class, 'home'])->name('c_home');
    Route::get('/carrier/offers/add', [C_AddOfferController::class, 'index'])->name('c_add_offer');
    Route::get('/carrier/offers/myoffer', [C_MyOfferController::class, 'index'])->name('c_myoffer');
    Route::get('/carrier/offers/offerdetail', [C_OfferDetailController::class, 'index'])->name('c_offerdetail');
    Route::get('/carrier/offers/offer', [C_OfferController::class, 'index'])->name('c_offer');
    // ... Autres routes spécifiques au carrier ...
//});

// Routes communes à tous les utilisateurs....................................
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginUser');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/otp', [OtpController::class, 'index'])->name('otp');
Route::post('/otp', [OtpController::class, 'optVerify'])->name('otpVerify');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('registerUser');
Route::get('/home', [HomeController::class, 'index'])->name('home');
