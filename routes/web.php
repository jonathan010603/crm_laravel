<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/customers');
});

Route::resource('/customers', CustomersController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit']);

Route::put('/customers/edit/{customer}', [CustomersController::class, 'edit'])
    ->name('customers.edit');