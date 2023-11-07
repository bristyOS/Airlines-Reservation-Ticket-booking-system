<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\seatController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\AirlinesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\Backend\UserController;

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
Route::get('/admin/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post',[UserController::class,'loginpost'])->name('admin.login.post');

Route::group(['middleware'=>'auth'],function(){

Route::get('/admin/logout',[UserController::class,'logout'])->name('admin.logout');
Route::get('/',[homeController::class,'home'])->name('dashboard');

Route::get('/users/list',[UsersController::class,'users'])->name('users.list');

Route::get('/seat/list',[seatController::class,'list']);
Route::post('/seatlist/store',[seatController::class,'store'])->name('seatlist.store');
Route::get('/seat/list/form', [seatController::class,'form']);

Route::get('/report/list',[reportController::class,'list']);

Route::get('/passenger/list',[PassengerController::class,'list']);

Route::post('/passengerlist/store',[PassengerController::class,'store'])->name('passengerlist.store');

Route::get('/passenger/list/form',[PassengerController::class,'form']);

Route::get('/airport/list', [AirportController::class,'list']);
Route::post('/airportlist/store',[AirportController::class,'store'])->name('airportlist.store');

Route::get('/airport/list/form', [AirportController::class,'form']);

Route::get('/airlines/list', [AirlinesController::class,'list']);
Route::get('/airlines/list/form', [AirlinesController::class,'form']);
Route::post('/airlineslist/store',[AirlinesController::class,'store'])->name('airlineslist.store');



Route::get('/booking/list', [BookingController::class,'list']);
Route::post('/bookinglist/store',[BookingController::class,'store'])->name('bookinglist.store');
Route::get('/booking/list/form', [BookingController::class,'form']);

Route::get('/flights/list', [FlightsController::class,'list']);
Route::get('/flights/list/form', [FlightsController::class,'form']);
Route::post('/flightstlist/store',[FlightsController::class,'store'])->name('flightslist.store');

Route::get('/dashboard/list', [dashboardController::class,'list']);
});