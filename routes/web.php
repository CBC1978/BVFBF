<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminUserGestionController;
use App\Http\Controllers\Admin\EntrepriseGestionController;
use App\Http\Controllers\Admin\AdminAnnoncesController;



//SHIPPER ROUTE

use App\Http\Controllers\Shipper\Announcement\S_AnnouncementController;
use App\Http\Controllers\Shipper\Offers\S_OfferController;

//CARRIER ROUTE

use App\Http\Controllers\Carrier\Announcement\C_AnnouncementController;
use App\Http\Controllers\Carrier\Offers\C_OfferController;

//regroupement 
use App\Http\Controllers\Shipper\Offers as ShipperOffers;
use App\Http\Controllers\Carrier\Offers as CarrierOffers;
use App\Http\Controllers\Admin as AdminControllers;

//announcement


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


//Announcement All in one 
//Route::get('/carrier/announcements', [C_AnnouncementController::class, 'index'])->name('carrier.announcements.index');
Route::get('/carrier/announcements/user', [C_AnnouncementController::class, 'userAnnouncements'])->name('carrier.announcements.user');
Route::get('/carrier/announcements/create', [C_AnnouncementController::class, 'create'])->name('carrier.announcements.create');
Route::get('/carrier/announcements/{id}', [C_AnnouncementController::class, 'show'])->name('carrier.announcements.show');
 
Route::prefix('carrier/announcements')->name('carrier.announcements.')->group(function () {
    Route::get('/', [C_AnnouncementController::class, 'index'])->name('index');
    Route::get('user', [C_AnnouncementController::class, 'userAnnouncements'])->name('user');
    Route::get('/carrier/announcements/create', [C_AnnouncementController::class, 'create'])->name('carrier.announcements.create');

    //Route::get('create', [C_AnnouncementController::class, 'createAnnouncements'])->name('create');
    Route::get('{id}', [C_AnnouncementController::class, 'showAnnouncements'])->name('show');
    // ... LES ROUTES ANNONCE CARRIER (TRANSPORTEUR)
});

Route::prefix('shipper/announcements')->name('shipper.announcements.')->group(function () {
    Route::get('/', [S_AnnouncementController::class, 'index'])->name('index');
    Route::get('user', [S_AnnouncementController::class, 'userAnnouncements'])->name('user');
    Route::get('create', [S_AnnouncementController::class, 'create'])->name('create');
    Route::get('{id}', [S_AnnouncementController::class, 'show'])->name('show');
    // ... 
    // ... LES ROUTES ANNONCE CARRIER (TRANSPORTEUR)
});



//Les routes annonces ADMIN
Route::prefix('annonces')->group(function () {
    Route::get('/', [AdminAnnoncesController::class, 'affichage'])->name('annonces.a_annonce');
    Route::put('/filtrer', [AdminAnnoncesController::class, 'filterbyStatus'])->name('annonces.filter');
    Route::get('/update-freight/{annonce}', [AdminAnnoncesController::class,'updateFreightAnnouncement'])->name('annonces.updateFreight');
    Route::get('/update-transport/{annonce}', [AdminAnnoncesController::class,'updateTransportAnnouncement'])->name('annonces.updateTransport');

});

//Route::get('/ajouter-entreprise', [EntrepriseGestionController::class, 'showEntrepriseForm'])->name('showEntrepriseForm');

//Route::get('/ajouter-entreprise', function () {
 //   return view('entreprise');
//});

//Route::post('/ajouter-transporteur', 'EntrepriseGestionController@addCarrier')->name('addCarrier');
//Route::post('/ajouter-expediteur', 'EntrepriseGestionController@addShipper')->name('addShipper');

Route::prefix('admin')->group(function () {
    Route::get('/ajouter-entreprise', [EntrepriseGestionController::class, 'showEntrepriseForm'])->name('admin.ajouter-entreprise');
    Route::post('/ajouter-transporteur', [EntrepriseGestionController::class, 'addCarrier'])->name('admin.ajouter-transporteur');
    Route::post('/ajouter-expediteur', [EntrepriseGestionController::class, 'addShipper'])->name('admin.ajouter-expediteur');
   
    // ... Autres routes spécifiques à la gestion des entreprises ...
});
