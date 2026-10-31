<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;

Route::get('/login', [AdminController::class,'showLoginForm'])->name('admin.login');
Route::post('/login-success', [AdminController::class, 'login'])->name('login.success');
Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('adminAuth')->group(function () {
    
    Route::get('/properties',[PropertyController::class,'properties'])->name('properties');
    Route::get('/store-property-modal', [PropertyController::class, 'storePropertyModal'])->name('property.modal');
    Route::post('/store-property', [PropertyController::class, 'storeProperty'])->name('store.property');
    Route::post('/save-enquiry',[PropertyController::class, 'saveEnquiry'])->name('save.enquiry');
    Route::get('/edit-property/{propertyId}',[PropertyController::class, 'editProperty'])->name('edit.property');
    Route::post('/update-property/{propertyId}',[PropertyController::class, 'updateProperty'])->name('update.property');
    Route::delete('/delete-property,/{propertyId}',[PropertyController::class,'deleteProperty'])->name('delete.property');
});

Route::get('/enquiry-form', [EnquiryController::class, 'enquiryForm'])->name('enquiry.form');
Route::post('/send-enquiry', [EnquiryController::class, 'sendEnquiry'])->middleware('throttle:5,1')->name('send.enquiry');
Route::post('/contact-enquiry', [EnquiryController::class, 'contactEnquiry'])->name('send.contact.enquiry');

Route::get('/',[HomeController::class, 'homePage'])->name('home');
Route::get('/properties-grid', [HomeController::class, 'propertyGrid'])->name('property');
Route::get('/properties-details/{propId}', [HomeController::class, 'propertyDetails'])->name('property.details');
Route::get('/guaranteed-rent', [HomeController::class, 'guaranteedRent'])->name('rent');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutus');
Route::get('/landlords', [HomeController::class, 'landLords'])->name('landlords');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact');
Route::post('/search-property', [HomeController::class, 'searchProperty'])->name('search.property');