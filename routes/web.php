<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\signUp_companiesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\Login_companiesController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [AdvertisementController::class, "index"])->name("home");
Route::get("/create", [AdvertisementController::class, "create"])->name("create");
Route::get("/offer/{advertisement:id}", [AdvertisementController::class, "show"])->name("show");
Route::get("/signUp", [SignUpController::class,'index'])->name("signUp");
Route::post("/offer/submit", [AdvertisementController::class, "store"])->name("store");
Route::get("/login", [LoginController::class,'index'])->name("login");
Route::get("/profile", [ApplicationController::class,'offers'])->name("profile");
Route::get("/monitoring", [MonitoringController::class,'index'])->name("monitoring");

//Login
Route::get("/login", [LoginController::class,"index"])->name("login");
Route::post("/login", [LoginController::class,"index"])->name("login");
//
Route::get("/traitement", [LoginController::class,"traitement"])->name("traitement_form");
Route::post("/traitement", [LoginController::class,"traitement"])->name("traitement_form");



Route::get('company/login', [Login_companiesController::class, 'login'])
    ->name('company.login');

Route::get("/admin/login", [Login_companiesController::class,"traitement_companie"])->name("traitement_form_companie");
Route::post("/admin/login", [Login_companiesController::class,"traitement_companie"])->name("traitement_form_companie");



Route::post("/offer/{advertisement:id}/applied", [ApplicationController::class, "store"])->name("applied");

Route::get("/signUp", [SignUpController::class,'index'])->name("signUp");
Route::get("/traitementform", [SignUpController::class,"traitementform"])->name("traitementform");
Route::post("/traitementform", [SignUpController::class,"traitementform"])->name("traitementform");

//signup_compagnie
Route::post("/signUp_form_companies", [signUp_companiesController::class,"index"])->name("signUp_form_companies");
Route::get("/signUp_form_companies", [signUp_companiesController::class,"index"])->name("signUp_form_companies");
Route::post("/traitementform_companies", [signUp_companiesController::class,"traitementform_companies"])->name("traitementform_companies");
Route::get("/traitementform_companies", [signUp_companiesController::class,"traitementform_companies"])->name("traitementform_companies");

Route::get("/monitoring", [MonitoringController::class,'show'])->name("monitoring");

Route::get("/monitoring/companies", [MonitoringController::class,'showCompanies'])->name("monitoring.companies");
Route::get("/monitoring/companies/create", [MonitoringController::class,'createCompanies'])->name("monitoring.companies.create");
Route::get("/monitoring/companies/send_edit_form_companies", [MonitoringController::class,'send_edit_form_companies'])->name("send_edit_form_companies");
Route::get("/monitoring/companies/send_edit_form_companies", [MonitoringController::class,'send_edit_form_companies'])->name("send_edit_form_companies");

Route::get("/monitoring/companies/{companies:id}", [MonitoringController::class, 'deleteCompanies'])->name("destroyCompanies");

Route::get("/monitoring/users", [MonitoringController::class,'showUser'])->name("monitoring.users");
Route::get("/monitoring/users/{users:id}", [MonitoringController::class, 'deleteUsers'])->name("destroyUser");
Route::get("/monitoring/users/create", [MonitoringController::class,'createUsers'])->name("monitoring.users.create");
Route::get("/monitoring/users/edit_users", [MonitoringController::class,'editUser'])->name("users.edit");
Route::get("/monitoring/users/send_edit_form_user", [MonitoringController::class,'send_edit_form_user'])->name("send_edit_form_user");
Route::patch("/monitoring/users/send_edit_form_user", [MonitoringController::class,'send_edit_form_user'])->name("send_edit_form_user");



Route::get('/company/logout', [Login_companiesController::class, 'logout'])->name('company.logout');

//monitoring
Route::group(['middleware' => ['auth:web']], function() {
    //Route::middleware("auth:admin")->group(function() {
    Route::get("/monitoring/companies", [MonitoringController::class,'showCompanies'])->name("monitoring.companies");
    Route::get("/monitoring", [MonitoringController::class,'show'])->name("monitoring");

    Route::get("/monitoring/advertisements/create", [MonitoringController::class,'createadvertissement'])->name("createadvertissement");
    Route::post("/monitoring/advertisements/traitementform_advertissement", [MonitoringController::class,'createadvertissement_form'])->name("create_advertissement_form");
    Route::get("/monitoring/advertisements/traitementform_advertissement", [MonitoringController::class,'createadvertissement_form'])->name("create_advertissement_form");

    Route::get("/monitoring/advertisements/create", [MonitoringController::class,'createadvertissement'])->name("createadvertissement");
    Route::post("/monitoring/advertisements/traitementform_advertissement", [MonitoringController::class,'createadvertissement_form'])->name("create_advertissement_form");
    Route::get("/monitoring/advertisements/traitementform_advertissement", [MonitoringController::class,'createadvertissement_form'])->name("create_advertissement_form");
    Route::get("/monitoring/advertisements", [MonitoringController::class,'showAdvertisements'])->name("monitoring.advertisements");
    Route::get("/monitoring/advertisements/{advertisements:id}", [MonitoringController::class, 'deleteAdvertisement'])->name("destroyAdvertisement");

    Route::get("/monitoring/applications/create", [MonitoringController::class,'createapplications'])->name("createapplication");
    Route::post("/monitoring/applications/traitementform_applications", [MonitoringController::class,'createapplications_form'])->name("create_applications_form");
    Route::get("/monitoring/applications/traitementform_applications", [MonitoringController::class,'createapplications_form'])->name("create_applications_form");
    Route::get("/monitoring/applications", [MonitoringController::class,'showApplications'])->name("monitoring.application");
    Route::get("/monitoring/applications/{applications:id}", [MonitoringController::class, 'deleteApplication'])->name("destroyApplication");

    //deconnexion
    Route::get("/log_out", [LoginController::class,"log_out"]);
});
//easter_egg

Route::get("/test", function () {
    return view("monitoring.index");
})->name("monitoring.index")->middleware('auth:web');

Route::get("/easter_egg", function(){
    return view("easter_egg");
})->name("easter");

Route::get('company/', [Login_companiesController::class, 'index'])
    ->name('company.home')->middleware('auth:company');

Route::get("/company/create", [Login_companiesController::class,'create'])->name("company.create")->middleware('auth:company');
Route::post("/company/create", [Login_companiesController::class,'store'])->name("company.store")->middleware('auth:company');
Route::get("/company/{advertisement:id}", [Login_companiesController::class, 'show'])->name('company.show')->middleware('auth:company');
