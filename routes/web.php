<?php

//accounts
use App\Http\Controllers\AccountsController;

//admin
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DriversController;
use App\Http\Controllers\admin\ScheduleController;
use App\Http\Controllers\admin\CheckpointController;

//passenger
use App\Http\Controllers\passenger\PassengerBusInfoController;
use App\Http\Controllers\passenger\PassengerScheduleController;
use App\Models\Conductor;
use Illuminate\Console\Scheduling\Schedule;
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

Route::get('/admin/drivers',[AuthController::class,'index'])->middleware('auth')->name('admin.Drivers');
Route::get('/admin/driver/create', [DriversController::class, 'createDriver'])->name('admin.driver.create');
Route::post('/admin/driver/store', [DriversController::class, 'storeDriver'])->name('admin.store');
Route::get('/admin/driver/update/{id}', [DriversController::class, 'updateDriver'])->name('updateDriver');
Route::put('/admin/driver/updated/{id}', [DriversController::class, 'updatedDriver'])->name('updatedDriver');
Route::delete('/admin/driver/delete/{id}', [DriversController::class, 'deleteDriver'])->name('deleteDriver');

Route::get('/admin/schedule/create', [ScheduleController::class, 'createSchedule'])->name('admin.schedule.create');
Route::post('/admin/schedule/store', [ScheduleController::class, 'storeSchedule'])->name('admin.store');
Route::get('/admin/schedule/update/{id}', [ScheduleController::class, 'updateSchedule'])->name('updateSchedule');
Route::put('/admin/schedule/updated/{id}', [ScheduleController::class, 'updatedSchedule'])->name('updatedSchedule');
Route::delete('/admin/schedule/delete/{id}', [ScheduleController::class, 'deleteSchedule'])->name('deleteSchedule');


Route::get('/admin/drivers',[DriversController::class,'index'])->middleware('auth')->name('admin.drivers');
Route::get('/admin/schedule',[ScheduleController::class,'index'])->middleware('auth')->middleware('auth')->name('admin.schedule');
Route::get('/admin/checkpoint',[CheckpointController::class,'index'])->middleware('auth')->name('admin.checkpoint');




// for passenger
Route::get('/passenger/businfo',[PassengerBusInfoController::class,'index'])->name('passenger.businfo');
Route::get('/passenger/schedule',[PassengerScheduleController::class,'index'])->name('passenger.schedule');
Route::get('/passenger/schedule/create', [PassengerScheduleController::class, 'createSchedule'])->name('passenger.schedule.create');