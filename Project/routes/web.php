<?php

use App\Http\Controllers\ComplainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerListController;
use App\Http\Controllers\SomeOneController;
use App\Http\Controllers\StaffController;

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

//Route::get('/admin', function () {
//    return view('backend.dashboard');
//});

//Route::get('/', function () {
//    return view('auth.login');
//});


Route::get('/visitors',[\App\Http\Controllers\VisitorsContriller::class,'visitors'])->middleware('auth');;;



Route::get('/',[CustomerController::class,'from']);
Route::get('/thank',[CustomerController::class,'thank']);
// Route::get('/', function () {
//     return view('frontend.userFrom');
// });



Route::get('/staff_section',[SomeOneController::class,'Type'])->middleware('auth');;;
Route::post('/staffAdd',[StaffController::class,'staffAdd'])->middleware('auth');;;
Route::get('/staffData',[StaffController::class,'staffData'])->middleware('auth');;;
Route::post('/editstaffd',[StaffController::class,'editstaffd'])->middleware('auth');;;
Route::post('/staffedit',[StaffController::class,'staffedit'])->middleware('auth');;;
Route::post('/staffview',[StaffController::class,'staffview'])->middleware('auth');;;
Route::post('/staffdel',[StaffController::class,'staffdel'])->middleware('auth');;;



Route::get('/manage_room',[RoomController::class,'Room'])->middleware('auth');;
Route::post('/roomAdd',[RoomController::class,'RoomAdd'])->middleware('auth');;;
Route::post('/editroom',[RoomController::class,'editroom'])->middleware('auth');;;
Route::post('/roomdelete',[RoomController::class,'roomdelete'])->middleware('auth');;;
Route::get('/RoomDetails',[RoomController::class,'RoomDetails'])->middleware('auth');;;
Route::post('/CustomerShow',[RoomController::class,'CustomerShow'])->middleware('auth');;;
Route::post('/room_type',[RoomController::class,'room_type'])->middleware('auth');;;
Route::post('/checkout',[RoomController::class,'checkout'])->middleware('auth');;;


Route::get('/Reservation',[CustomerController::class,'Reservation'])->middleware('auth');;;
Route::post('/ReservationAdd',[CustomerController::class,'ReservationAdd'])->middleware('auth');;;
Route::post('/price',[CustomerController::class,'price'])->middleware('auth');;;


Route::post('/payment_Ok',[CustomerListController::class,'payment_Ok'])->middleware('auth');;;
Route::get('/payment_Ok1',[CustomerListController::class,'payment_Ok1'])->middleware('auth');;;
Route::get('/PaymentClear',[CustomerListController::class,'PaymentClear1'])->middleware('auth');;;
Route::get('/customerList',[CustomerListController::class,'customerList1'])->middleware('auth');;;
Route::get('/customer',[CustomerListController::class,'customer1'])->middleware('auth');;;


Route::post('/complainAdd',[ComplainController::class,'complainAdd'])->middleware('auth');;;
Route::get('/complain',[ComplainController::class,'complain'])->middleware('auth');;;
Route::get('/getcomplain',[ComplainController::class,'getcomplain'])->middleware('auth');;;
Route::post('/resolve',[ComplainController::class,'resolve'])->middleware('auth');;;

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

// Route::get('/', function () {
//     return redirect()->route('admin');
// });

//Route::get('/', function () {
//    return view('welcome');
//});
