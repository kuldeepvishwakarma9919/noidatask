<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index'])->name('home.index'); 
Route::post('/leads/store', [SiteController::class, 'formSubmit'])->name('leads.store'); 
Route::get('/admin/dashboard', [SiteController::class, 'dashboard'])->name('dashboard'); 
Route::resource('leads', LeadController::class);


