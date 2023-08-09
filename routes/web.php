<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\showController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\aboutController;

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

// Route::get('/', function () {
//     return view('home');
    
// });
Route::get('home', [homeController::class, 'home']);
Route::get('home', [showController::class, 'showPackage']);
Route::get('about', [aboutController::class, 'about']);


Route::post('createPackage', [PackageController::class, 'createPackage']);

Route::get('booking', [bookingController::class, 'booking']);
