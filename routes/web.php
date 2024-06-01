<?php

//accounts
use App\Http\Controllers\AccountsController;

//admin
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DriversController;
use App\Http\Controllers\admin\ScheduleController;
use App\Http\Controllers\admin\CheckpointController;

//passenger
use App\Http\Controllers\passenger\PassengerAuthController;
use App\Http\Controllers\passenger\PassengerBusInfoController;
use App\Http\Controllers\passenger\PassengerScheduleController;


use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AccountsController::class,'index'])->name('accounts');

// for Admin
Route::get('/admin/login',[AuthController::class,'index'])->name('admin.login');
Route::post('/admin/login',[AuthController::class,'login'])->name('admin.login.submit');
Route::get('/admin/logout',[AuthController::class,'logout'])->middleware('auth')->name('admin.logout');

Route::get('/admin/drivers',[DriversController::class,'index'])->middleware('auth')->name('admin.Drivers');
Route::get('/admin/drivers/update/{id}', [DriversController::class, 'updateDrivers'])->name('updateDrivers');
Route::put('/admin/drivers/updated/{id}', [DriversController::class, 'updatedDrivers'])->name('updatedDrivers');
Route::delete('/admin/drivers/delete/{id}', [DriversController::class, 'deleteRDrivers'])->name('deleteDrivers');

Route::get('/admin/drivers/driver/{driverId}', [DriversController::class, 'showDriver'])->name('showDriver');
Route::post('/admin/drivers/driver/{driversId}', [DriversController::class, 'addDriver'])->name('addDriver');

Route::get('/admin/drivers',[DriversController::class,'index'])->middleware('auth')->name('admin.drivers');
Route::get('/admin/schedule',[ScheduleController::class,'index'])->middleware('auth')->middleware('auth')->name('admin.schedule');
Route::get('/admin/checkpoint',[CheckpointController::class,'index'])->middleware('auth')->name('admin.checkpoint');




// for passenger
Route::get('/passenger/signup',[PassengerAuthController::class,'registration'])->name('passenger.registration');
Route::post('/passenger/signup',[PassengerAuthController::class,'signup'])->name('passenger.signup');

Route::get('/passenger/login',[PassengerAuthController::class,'index'])->name('passenger.login');
Route::post('/passenger/login',[PassengerAuthController::class,'login'])->name('passenger.login.submit');
Route::get('/passenger/logout',[PassengerAuthController::class,'logout'])->middleware('auth')->name('passenger.logout');

Route::get('/passenger/businfo',[PassengerBusInfoController::class,'index'])->name('passenger.businfo');
Route::get('/passenger/schedule',[PassengerScheduleController::class,'index'])->name('passenger.schedule');