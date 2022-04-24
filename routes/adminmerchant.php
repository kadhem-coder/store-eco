<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\AdminMerchant\DashbordController;

/*
|--------------------------------------------------------------------------
| admin-merchant Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth:adminmerchant' ] , function(){
    Route::get('/', [DashbordController::class , 'index'])->name('merchant.dashbord');

});
Route::group( ['middleware'=>'guest:adminmerchant'] ,  function(){
    Route::get('/login', [logincontroller::class , 'viewmerchantlogin'])->name('merchant.login');
    Route::post('/login', [logincontroller::class , 'merchantlogin'])->name('admin.merchant.login');
    
}); 