<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\dashboardController;


/*
---------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homeController::class,'home']);
Route::get('/ticket/list',[TicketController::class,'list']);
Route::post('/ticketlist/store',[TicketController::class,'store'])->name('ticketlist.store');
Route::get('/ticket/list/form', [TicketController::class,'form']);

Route::get('/report/list',[reportController::class,'list']);

Route::get('/passenger/list',[PassengerController::class,'list']);

Route::post('/passengerlist/store',[PassengerController::class,'store'])->name('passengerlist.store');

Route::get('/passenger/list/form',[PassengerController::class,'form']);

Route::get('/airport/list', [AirportController::class,'list']);
Route::post('/airportlist/store',[AirportController::class,'store'])->name('airportlist.store');

Route::get('/airport/list/form', [AirportController::class,'form']);

Route::get('/booking/list', [BookingController::class,'list']);
Route::post('/bookinglist/store',[BookingController::class,'store'])->name('bookinglist.store');
Route::get('/booking/list/form', [BookingController::class,'form']);

Route::get('/flights/list', [FlightsController::class,'list']);
Route::get('/flights/list/form', [FlightsController::class,'form']);

Route::get('/dashboard/list', [dashboardController::class,'list']);
