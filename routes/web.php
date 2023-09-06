<?php

use App\Http\Controllers\Admin\profile\AdminProfileController1;
use App\Http\Controllers\shipper\profile\ShipperProfileController1;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminUserGestionController;
use App\Http\Controllers\Admin\EntrepriseGestionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\carrier\profile\CarrierProfileController;
use App\Http\Controllers\shipper\profile\ShipperProfile1Controller;




use App\Http\Controllers\Shipper\Offers\S_MyOfferController;


//SHIPPER ROUTE

use App\Http\Controllers\Shipper\Announcement\ShipperAnnouncementController;
use App\Http\Controllers\Shipper\Offers\S_OfferController;

//CARRIER ROUTE

use App\Http\Controllers\Carrier\Announcement\CarrierAnnouncementController;
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
//Route::get('/carrier/announcements', [CarrierAnnouncementController::class, 'index'])->name('carrier.announcements.index');
//Route::get('/carrier/announcements/user', [CarrierAnnouncementController::class, 'userConnectedAnnouncement'])->name('carrier.announcements.user');
//Route::get('/carrier/announcements/create', [CarrierAnnouncementController::class, 'create'])->name('carrier.announcements.create');
//Route::get('/carrier/announcements/{id}', [CarrierAnnouncementController::class, 'show'])->name('carrier.announcements.show');

Route::prefix('carrier/announcements')->name('carrier.announcements.')->group(function () {
    Route::get('/', [CarrierAnnouncementController::class, 'displayTransportAnnouncement'])->name('index');
    Route::get('user', [CarrierAnnouncementController::class, 'userConnectedAnnouncement'])->name('user');
    Route::get('create', [CarrierAnnouncementController::class, 'displayAnnouncementForm'])->name('create'); 
    Route::post('store', [CarrierAnnouncementController::class, 'handleSubmittedAnnouncement'])->name('store'); // Ajoutez une route pour le stockage

    Route::post('postuler', [CarrierAnnouncementController::class, 'positOffer'])->name('postuler');
    Route::get('{id}', [CarrierAnnouncementController::class, 'show'])->name('show'); // 
});


Route::prefix('shipper/announcements')->name('shipper.announcements.')->group(function () {
    Route::get('/', [ShipperAnnouncementController::class, 'displayFreightAnnouncement'])->name('index');
    Route::get('user', [ShipperAnnouncementController::class, 'userConnectedAnnouncement'])->name('user');
    Route::get('create', [ShipperAnnouncementController::class, 'displayAnnouncementForm'])->name('create');
    Route::get('{id}', [ShipperAnnouncementController::class, 'show'])->name('show');
    Route::post('postuler', [ShipperAnnouncementController::class, 'positOffer'])->name('postuler');
    Route::get('myoffer/{id}', [ShipperAnnouncementController::class, 'offer'])->name('myoffer')->where('id', '[0-9]+');;
    Route::post('store', [ShipperAnnouncementController::class, 'handleSubmittedAnnouncement'])->name('store'); // Ajoutez une route pour le stockage

    // ...
    // ... L
});



//Les routes annonces ADMIN
Route::prefix('annonces')->group(function () {
    Route::get('/', [AdminController::class, 'displayAnnouncement'])->name('annonces.a_annonce');
    Route::put('/filtrer', [AdminController::class, 'announcementFilterbyStatus'])->name('annonces.filter');
    Route::get('/update-freight/{annonce}', [AdminController::class,'updateFreightAnnouncementStatus'])->name('annonces.updateFreight');
    Route::get('/update-transport/{annonce}', [AdminController::class,'updateTransportAnnouncementStatus'])->name('annonces.updateTransport');
    
});
Route::post('/bulk_update_status', [AdminController::class, 'bulkUpdateUserStatus'])->name('bulk_update_status');

Route::middleware(['check.role:admin'])->group(function () {
    Route::get('/a_home', [HomeController::class, 'home'])->name('a_home');
    Route::get('/a_user_gestion', [AdminController::class, 'displayUser'])->name('a_user_gestion');
    Route::get('/filter_users', [AdminController::class, 'filterUsers'])->name('filter_users');

});


Route::prefix('admin')->group(function () {

    Route::get('/entreprise', [AdminController::class, 'displayEntreprise'])->name('admin.entreprise');
    Route::post('/ajouter-transporteur', [AdminController::class, 'addCarrier'])->name('admin.ajouter-transporteur');
    Route::post('/ajouter-expediteur', [AdminController::class, 'addShipper'])->name('admin.ajouter-expediteur');
   
    Route::post('/assigner-entreprise-user', [AdminController::class, 'assignEntrepriseToUser'])->name('admin.assigner-entreprise-user');
  // ... Autres routes spécifiques à la gestion des entreprises ...
});

Route::prefix('admin')->group(function () {
    Route::get('/profile', [AdminController::class,'displayProfile'])->name('admin.profile.affichage');
    Route::get('profile/update', [AdminController::class,'updateUserProfile'])->name('admin.profile.update');
});












Route::prefix('carrier')->group(function () {
    Route::get('/profile', [CarrierProfileController::class,'affichage'])->name('carrier.profile.affichage');
     Route::get('profile/update', [CarrierProfileController::class,'update'])->name('carrier.profile.update');
});


Route::prefix('shipper')->group(function () {
    Route::get('/profile', [ShipperProfileController1::class,'affichage'])->name('shipper.profile.affichage');
    Route::get('profile/update', [ShipperProfileController1::class,'update'])->name('shipper.profile.update');
});