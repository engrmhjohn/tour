<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AdminController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[TourController::class,'index'])->name('/');
Route::get('/about',[TourController::class,'about'])->name('about');
Route::get('/popular-tour',[TourController::class,'popularTour'])->name('popular-tour');
Route::get('/popular-tour-details/{pt_slug}',[TourController::class,'popularTourDetails'])->name('popular-tour-details');
Route::get('/day-tour',[TourController::class,'DayTour'])->name('day-tour');
Route::get('/day-tour-details/{day_tour_slug}',[TourController::class,'dayTourDetails'])->name('day-tour-details');
Route::get('/contact-us',[TourController::class,'contactUs'])->name('contact-us');
Route::get('/faq',[TourController::class,'faq'])->name('faq');
Route::get('/privacy-policy',[TourController::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/t&c',[TourController::class,'tnc'])->name('t&c');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('redirects',[AdminController::class,'index'])->name('redirects');
    Route::get('/manage-admin',[AdminController::class,'admin'])->name('manage-admin');
    Route::get('/role/{id}',[AdminController::class,'role'])->name('role');
    Route::post('/delete-admin',[AdminController::class,'deleteAdmin'])->name('delete-admin');
    Route::get('/add-day-tour',[AdminController::class,'dayTour'])->name('add-day-tour');
    Route::post('/new-day-tour',[AdminController::class,'saveDayTour'])->name('new-day-tour');
    Route::get('/manage-day-tour',[AdminController::class,'manageDayTour'])->name('manage-day-tour');
    Route::post('/delete-day-tour',[AdminController::class,'deleteDayTour'])->name('delete-day-tour');
    Route::get('/edit-day-tour/{id}',[AdminController::class,'editDayTour'])->name('edit-day-tour');
    Route::post('/update-day-tour',[AdminController::class,'updateDayTour'])->name('update-day-tour');
    Route::get('/d_status/{id}',[AdminController::class,'dStatus'])->name('d_status');
    Route::get('/add-popular-tour',[AdminController::class,'popularTour'])->name('add-popular-tour');
    Route::post('/new-popular-tour',[AdminController::class,'savePopularTour'])->name('new-popular-tour');
    Route::get('/manage-popular-tour',[AdminController::class,'managePopularTour'])->name('manage-popular-tour');
    Route::get('/edit-popular-tour/{id}',[AdminController::class,'editPopularTour'])->name('edit-popular-tour');
    Route::post('/update-popular-tour',[AdminController::class,'updatePopularTour'])->name('update-popular-tour');
    Route::post('/delete-popular-tour',[AdminController::class,'deletePopularTour'])->name('delete-popular-tour');
    Route::get('/status/{id}',[AdminController::class,'status'])->name('status');
    Route::get('/add-contact-info',[AdminController::class,'contactInfo'])->name('add-contact-info');
    Route::get('/manage-contact-info',[AdminController::class,'manageContactInfo'])->name('manage-contact-info');
    Route::post('/new-contact-info',[AdminController::class,'saveContactInfo'])->name('new-contact-info');
    Route::get('/edit-contact-info/{id}',[AdminController::class,'editContactInfo'])->name('edit-contact-info');
    Route::post('/update-contact-info',[AdminController::class,'updateContactInfo'])->name('update-contact-info');
    Route::get('/add-slider-info',[AdminController::class,'sliderInfo'])->name('add-slider-info');
    Route::post('/new-slider-info',[AdminController::class,'saveSliderInfo'])->name('new-slider-info');
    Route::get('/manage-slider-info',[AdminController::class,'manageSliderInfo'])->name('manage-slider-info');
    Route::get('/edit-slider-info/{id}',[AdminController::class,'editSliderInfo'])->name('edit-slider-info');
    Route::post('/update-slider-info',[AdminController::class,'updateSliderInfo'])->name('update-slider-info');
    Route::get('/add-payment-info',[AdminController::class,'paymentInfo'])->name('add-payment-info');
    Route::post('/new-payment-info',[AdminController::class,'savePaymentInfo'])->name('new-payment-info');
    Route::get('/manage-payment-info',[AdminController::class,'managePaymentInfo'])->name('manage-payment-info');
    Route::get('/edit-payment-info/{id}',[AdminController::class,'editPaymentInfo'])->name('edit-payment-info');
    Route::post('/update-payment-info',[AdminController::class,'updatePaymentInfo'])->name('update-payment-info');
    Route::get('/add-client-info',[AdminController::class,'clientInfo'])->name('add-client-info');
    Route::post('/new-client-info',[AdminController::class,'saveClientInfo'])->name('new-client-info');
    Route::get('/manage-client-info',[AdminController::class,'manageClientInfo'])->name('manage-client-info');
    Route::get('/edit-client-info/{id}',[AdminController::class,'editClientInfo'])->name('edit-client-info');
    Route::post('/update-client-info',[AdminController::class,'updateClientInfo'])->name('update-client-info');
    Route::get('/add-footer-info',[AdminController::class,'footerInfo'])->name('add-footer-info');
    Route::post('/new-footer-info',[AdminController::class,'saveFooterInfo'])->name('new-footer-info');
    Route::get('/manage-footer-info',[AdminController::class,'manageFooterInfo'])->name('manage-footer-info');
    Route::get('/edit-footer-info/{id}',[AdminController::class,'editFooterInfo'])->name('edit-footer-info');
    Route::post('/update-footer-info',[AdminController::class,'updateFooterInfo'])->name('update-footer-info');
    Route::get('/add-about-info',[AdminController::class,'aboutInfo'])->name('add-about-info');
    Route::post('/new-about-info',[AdminController::class,'saveAboutInfo'])->name('new-about-info');
    Route::get('/manage-about-info',[AdminController::class,'manageAboutInfo'])->name('manage-about-info');
    Route::get('/edit-about-info/{id}',[AdminController::class,'editAboutInfo'])->name('edit-about-info');
    Route::post('/update-about-info',[AdminController::class,'updateAboutInfo'])->name('update-about-info');
    Route::get('/add-tnc-info',[AdminController::class,'tnc'])->name('add-tnc-info');
    Route::post('/new-tnc-info',[AdminController::class,'saveTnc'])->name('new-tnc-info');
    Route::get('/manage-tnc-info',[AdminController::class,'manageTnc'])->name('manage-tnc-info');
    Route::get('/edit-tnc-info/{id}',[AdminController::class,'editTnc'])->name('edit-tnc-info');
    Route::post('/update-tnc-info',[AdminController::class,'updateTnc'])->name('update-tnc-info');
    Route::get('/add-faq-info',[AdminController::class,'faq'])->name('add-faq-info');
    Route::post('/new-faq-info',[AdminController::class,'saveFaq'])->name('new-faq-info');
    Route::get('/manage-faq-info',[AdminController::class,'manageFaq'])->name('manage-faq-info');
    Route::get('/edit-faq-info/{id}',[AdminController::class,'editFaq'])->name('edit-faq-info');
    Route::post('/update-faq-info',[AdminController::class,'updateFaq'])->name('update-faq-info');
    Route::post('/delete-faq-info',[AdminController::class,'deleteFaq'])->name('delete-faq-info');
    Route::get('/add-privacy-policy-info',[AdminController::class,'policy'])->name('add-privacy-policy-info');
    Route::post('/new-privacy-policy-info',[AdminController::class,'savePolicy'])->name('new-privacy-policy-info');
    Route::get('/manage-privacy-policy-info',[AdminController::class,'managePolicy'])->name('manage-privacy-policy-info');
    Route::get('/edit-privacy-policy-info/{id}',[AdminController::class,'editPolicy'])->name('edit-privacy-policy-info');
    Route::post('/update-privacy-policy-info',[AdminController::class,'updatePolicy'])->name('update-privacy-policy-info');
    Route::get('/add-logo',[AdminController::class,'logo'])->name('add-logo');
    Route::post('/new-logo',[AdminController::class,'logoImg'])->name('new-logo');
    Route::get('/manage-logo',[AdminController::class,'manageLogo'])->name('manage-logo');
    Route::get('/edit-logo/{id}',[AdminController::class,'editLogo'])->name('edit-logo');
    Route::post('/update-logo',[AdminController::class,'updateLogo'])->name('update-logo');
    Route::post('/delete-logo',[AdminController::class,'deleteLogo'])->name('delete-logo');
});
