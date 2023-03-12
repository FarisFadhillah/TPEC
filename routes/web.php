<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AdminController::class)->group(function ()
{
    Route::get('/dashboard', 'index');
    Route::get('/data/company', 'GetCompanyList')->name('data.company');
    Route::get('/data/user_comp', 'GetUserCompList')->name('data.user_comp');
    Route::get('/data/user_cust', 'GetUserCustList')->name('data.user_cust');
    Route::get('/data/courier', 'GetCourierList')->name('data.courier');
    Route::get('/data/transaction', 'GetTransactionList')->name('data.transaction');
});