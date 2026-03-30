<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::redirect('/solutions', '/services', 301);
Route::get('/service-contracts', [PageController::class, 'serviceContracts'])->name('service-contracts');
Route::get('/rental', [PageController::class, 'rental'])->name('rental');
Route::get('/repairs-call-outs', [PageController::class, 'repairs'])->name('repairs');
Route::get('/sectors', [PageController::class, 'sectors'])->name('sectors');
Route::get('/sectors/healthcare', [PageController::class, 'sectorHealthcare'])->name('sectors.healthcare');
Route::get('/sectors/hospitality', [PageController::class, 'sectorHospitality'])->name('sectors.hospitality');
Route::get('/sectors/care-facilities', [PageController::class, 'sectorCare'])->name('sectors.care');
Route::get('/sectors/commercial-industrial', [PageController::class, 'sectorCommercial'])->name('sectors.commercial');
Route::get('/equipment', [PageController::class, 'equipment'])->name('equipment');
Route::get('/equipment/{category}', [PageController::class, 'equipmentCategory'])->name('equipment.category');
Route::get('/equipment/{category}/{product}', [PageController::class, 'equipmentProduct'])->name('equipment.product');
Route::get('/electrolux-partnership', [PageController::class, 'electrolux'])->name('electrolux');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/brand-protection', [PageController::class, 'brandProtection'])->name('brand-protection');
Route::get('/request-assessment', [PageController::class, 'requestAssessment'])->name('request-assessment');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login',  [Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [Admin\AuthController::class, 'login'])->name('login.post');

    Route::middleware('admin.auth')->group(function () {
        Route::get('/', fn () => redirect()->route('admin.equipment.index'));
        Route::post('logout', [Admin\AuthController::class, 'logout'])->name('logout');
        Route::patch('equipment/{equipment}/toggle', [Admin\EquipmentController::class, 'toggleActive'])->name('equipment.toggle');
        Route::resource('equipment', Admin\EquipmentController::class);
        Route::get('submissions',       [Admin\SubmissionController::class, 'index'])->name('submissions.index');
        Route::get('submissions/{sub}', [Admin\SubmissionController::class, 'show'])->name('submissions.show');
    });
});
