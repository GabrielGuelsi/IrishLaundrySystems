<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
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
