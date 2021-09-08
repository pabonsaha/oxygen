<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration',function()
{
    return view('user.registration');
});


Route::post('/saveRegistration',[UserController::class,'registerUser'])->name('saveUser');





Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('user.usermaster');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/aboutUS', function () {
    return view('user.aboutUs');
})->name('user.aboutUS');
Route::middleware(['auth:sanctum', 'verified'])->get('/information', function () {
    return view('user.information');
})->name('user.information');

Route::middleware(['auth:sanctum', 'verified'])->get('/order/{value}', function ($value) {
    return view('user.order',compact('value'));
})->name('user.order');
Route::middleware(['auth:sanctum', 'verified'])->post('/ConfirmOrder',[UserController::class,'confirmOrder'])->name('user.confirm');

Route::middleware(['auth:sanctum', 'verified'])->get('/orderList', [UserController::class,'orderList'])->name('user.orderList');




Route::prefix('admin')->name('admin.')->group(function()
{
    // Admin Auth Start

    // Don't Change The Code Without Asking


    $enableViews = config('fortify.views', true);
    Route::view('/login','auth.adminlogin')->middleware('guest:admin')->name('login');
    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name('login');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware('auth:admin')->name('home');
    Route::get('/allUser',[AdminController::class,'allUser'])->middleware('auth:admin')->name('allUser');
    Route::get('/pendingOrder',[AdminController::class,'pendingOrder'])->middleware('auth:admin')->name('pendingOrder');
    Route::get('/confirmOrder',[AdminController::class,'confirmOrder'])->middleware('auth:admin')->name('confirmOrder');
    Route::get('/pendingPayment',[AdminController::class,'pendingPayment'])->middleware('auth:admin')->name('pendingPayment');
    Route::get('/confirmPayment',[AdminController::class,'confirmPayment'])->middleware('auth:admin')->name('confirmPayment');

    Route::get('/makeOrderConfirm/{id}',[AdminController::class,'makeOrderConfirm'])->middleware('auth:admin')->name('makeOrderConfirm');
    Route::get('/makePaymentConfirm/{id}',[AdminController::class,'makePaymentConfirm'])->middleware('auth:admin')->name('makePaymentConfirm');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:admin')
        ->name('logout');

    // Admin Auth End  

    
    
});