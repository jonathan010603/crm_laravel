<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticator;

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

Route::get('/login', [Logincontroller::class, 'index'])
    ->name('login');

Route::post('/login', [Logincontroller::class, 'attempt'])
    ->name('login.attempt');

Route::get('/login/logout', [Logincontroller::class, 'logout'])
    ->name('login.logout');

Route::get('/', function () {
    return redirect('/customers');
})->middleware(Authenticator::class);

Route::resource('/customers', CustomersController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit'])
    ->middleware(Authenticator::class);

Route::get('/customers/edit/{customer}', [CustomersController::class, 'edit'])
    ->name('customers.edit')
    ->middleware(Authenticator::class);

Route::post('/customers/store', [CustomersController::class, 'store'])
    ->name('customers.store')
    ->middleware(Authenticator::class);

Route::put('/customers/edit/{customer}', [CustomersController::class, 'update'])
    ->name('customers.update')
    ->middleware(Authenticator::class);

Route::delete('/customers/delete/{customer}', [CustomersController::class, 'destroy'])
    ->name('customers.destroy')
    ->middleware(Authenticator::class);

route::get('/email', function () {
    return new App\Mail\UserUpdated(
        26,
        'Jonathan',
        'da silva',
        'jonathan@gmail.com',
        '48999999999'
    );
});