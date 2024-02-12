<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\DeviceController;
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

// ###############################   START AUTH   ######################################### //

Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::get('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'index']);
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index']);


Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);

//
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ---------------------------------    END AUTH   ------------------------------------ //

// ###############################   START PAGES   ######################################### //

// Dashboard Home
//Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//merchants
Route::resource('merchants', MerchantController::class);

//devices
Route::get('/create-device/{id}', [DeviceController::class, 'create'])->name('device.create');
Route::post('/store-device', [DeviceController::class, 'store'])->name('device.store');
Route::get('/show-devices', [DeviceController::class, 'show'])->name('device.index');
Route::get('/edit-device/{id}', [DeviceController::class, 'edit'])->name('device.edit');
Route::post('/update-device/{id}', [DeviceController::class, 'update'])->name('device.update');
Route::get('/delete-device/{id}', [DeviceController::class, 'remove'])->name('device.delete');

//transactions
Route::get('/view-transactions',[App\Http\Controllers\TransactionController::class,'show'])->name('transactions.show');
Route::get('/filter-transactions',[App\Http\Controllers\TransactionController::class,'filter'])->name('transactions.filter');
Route::get('/view-transactions/{id}',[App\Http\Controllers\TransactionController::class,'view'])->name('transactions.view');
Route::get('/filter/{id}',[App\Http\Controllers\TransactionController::class,'transactionsView'])->name('transactions.viewFilter');
Route::post('/filter-Transactions', [App\Http\Controllers\TransactionController::class, 'filterByAgentId'])->name('transactions.filterByAgentId');
Route::post('/filter-TerminalId', [App\Http\Controllers\TransactionController::class, 'filterByTerminalId'])->name('transactions.filterByTerminalId');


// -----------------------------------------    END PAGES   ------------------------------------------ //

// ###############################   START TAMPLATES   ######################################### //

Route::get('/tamplates/forms', [App\Http\Controllers\TamplatesController::class, 'forms'])->name('tamplates-forms');
Route::get('/tamplates/tables', [App\Http\Controllers\TamplatesController::class, 'tables'])->name('tamplates-tables');

// -----------------------------------------    END TAMPLATES   ------------------------------------------ //


