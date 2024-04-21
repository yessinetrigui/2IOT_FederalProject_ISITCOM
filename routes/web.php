<?php

use App\Http\Controllers\Staff\Admin\AdminManageClientsController;
use App\Http\Controllers\Staff\Admin\AdminAuthController;
use App\Http\Controllers\Staff\Admin\AdminController;
use App\Http\Controllers\Staff\Admin\AdminManageAgencyController;
use App\Http\Controllers\Staff\Admin\AdminManageCarsController;
use App\Http\Controllers\Staff\Admin\AdminManageRentalsController;
use App\Http\Controllers\Staff\Admin\AdminManageOffersController;
use App\Http\Controllers\Staff\AgencyManager\AgencyManagerAuthController;
use App\Http\Controllers\Staff\AgencyManager\AgencyManagerController;
use App\Http\Controllers\Staff\AgencyManager\AgencyManagerManageCarsController;
use App\Http\Controllers\Staff\AgencyManager\AgencyManagerManageClientsController;
use App\Http\Controllers\Staff\AgencyManager\AgencyManagerManageOffersController;
use App\Http\Controllers\Staff\AgencyManager\AgencyManagerManageRentalsController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
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



Route::name('user.')->group(function () {

    Route::get('/', [UserController::class, 'show_home'])->name('home');
    Route::get('/agence/{id}', [UserController::class, 'show_agence'])->name('agence');

    Route::middleware(['guest:web'])->group(function () {
        //not logged in
        Route::get('/login', [UserAuth::class, 'show_login'])->name('login');
        Route::post('/login', [UserAuth::class, 'verif_login']);
    });
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminAuthController::class, 'doLogin'])->name('doLogin');
    });
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('showPanel');


        /***** Agency Manager  */
        Route::prefix('agency')->name('agency.')->group(function () {
            Route::get('/show', [AdminManageAgencyController::class, 'showAll'])->name('showAll');
            Route::get('/show/{id}', [AdminManageAgencyController::class, 'showPerID'])->name('showPerID');

            Route::prefix('manage')->name('manage.')->group(function () {
                Route::get('/add', [AdminManageAgencyController::class, 'showAdd'])->name('showAdd');
                Route::post('/add', [AdminManageAgencyController::class, 'doAdd'])->name('doAdd');

                Route::get('/update/{id}', [AdminManageAgencyController::class, 'showUpdate'])->name('showUpdate');
                Route::post('/update/{id}', [AdminManageAgencyController::class, 'doUpdate'])->name('doUpdate');


                Route::get('/stop/{id}', [AdminManageAgencyController::class, 'showStop'])->name('showStop');
                Route::post('/stop/{id}', [AdminManageAgencyController::class, 'doStop'])->name('doStop');

                Route::get('/delete/{id}', [AdminManageAgencyController::class, 'showDelete'])->name('showDelete');
                Route::post('/delete/{id}', [AdminManageAgencyController::class, 'doDelete'])->name('doDelete');
            });
        });
        Route::prefix('clients')->name('clients.')->group(function () {
            Route::get('/show', [AdminManageClientsController::class, 'showAll'])->name('showAll');
        });
        Route::prefix('rentals')->name('rentals.')->group(function () {
            Route::get('/show', [AdminManageRentalsController::class, 'showAll'])->name('showAll');
        });
        Route::prefix('cars')->name('cars.')->group(function () {
            Route::get('/show', [AdminManageCarsController::class, 'showAll'])->name('showAll');
        });
        Route::prefix('offers')->name('offers.')->group(function () {
            Route::get('/show', [AdminManageOffersController::class, 'showAll'])->name('showAll');

        });
    });
});



Route::prefix('AgencyManager')->name('AgencyManager.')->group(function () {
    Route::middleware(['guest:AgencyManager'])->group(function () {
        Route::get('/login', [AgencyManagerAuthController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AgencyManagerAuthController::class, 'doLogin'])->name('doLogin');
    });
    Route::middleware(['auth:AgencyManager'])->group(function () {
        Route::get('/logout', [AgencyManagerAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AgencyManagerController::class, 'showDashboard'])->name('showPanel');

        Route::prefix('clients')->name('clients.')->group(function () {
            Route::get('/show', [AgencyManagerManageClientsController::class, 'showAll'])->name('showAll');
        });
        Route::prefix('rental')->name('rental.')->group(function () {
            Route::get('/show', [AgencyManagerManageRentalsController::class, 'showAll'])->name('showAll');
            Route::get('/approve/{id}', [AgencyManagerManageRentalsController::class, 'approve'])->name('approve');
            Route::get('/decline/{id}', [AgencyManagerManageRentalsController::class, 'decline'])->name('decline');
        });
        Route::prefix('car')->name('car.')->group(function () {
            Route::get('/show', [AgencyManagerManageCarsController::class, 'showAll'])->name('showAll');
            Route::get('/show/{id}', [AgencyManagerManageCarsController::class, 'showPerID'])->name('showPerID');

            Route::prefix('manage')->name('manage.')->group(function () {
                Route::get('/add', [AgencyManagerManageCarsController::class, 'showAdd'])->name('showAdd');
                Route::post('/add', [AgencyManagerManageCarsController::class, 'doAdd'])->name('doAdd');

                Route::get('/update/{id}', [AgencyManagerManageCarsController::class, 'showUpdate'])->name('showUpdate');
                Route::post('/update/{id}', [AgencyManagerManageCarsController::class, 'doUpdate'])->name('doUpdate');


                Route::get('/stop/{id}', [AgencyManagerManageCarsController::class, 'showStop'])->name('showStop');
                Route::post('/stop/{id}', [AgencyManagerManageCarsController::class, 'doStop'])->name('doStop');


                Route::get('/delete/{id}', [AgencyManagerManageCarsController::class, 'showDelete'])->name('showDelete');
                Route::post('/delete/{id}', [AgencyManagerManageCarsController::class, 'doDelete'])->name('doDelete');
            });

        });
        Route::prefix('offer')->name('offer.')->group(function () {
            Route::get('/show', [AgencyManagerManageOffersController::class, 'showAll'])->name('showAll');
            Route::get('/show/{id}', [AgencyManagerManageOffersController::class, 'showPerID'])->name('showPerID');

            Route::prefix('manage')->name('manage.')->group(function () {
                Route::get('/add', [AgencyManagerManageOffersController::class, 'showAdd'])->name('showAdd');
                Route::post('/add', [AgencyManagerManageOffersController::class, 'doAdd'])->name('doAdd');

                Route::get('/update/{id}', [AgencyManagerManageOffersController::class, 'showUpdate'])->name('showUpdate');
                Route::post('/update/{id}', [AgencyManagerManageOffersController::class, 'doUpdate'])->name('doUpdate');


                Route::get('/stop/{id}', [AgencyManagerManageOffersController::class, 'showStop'])->name('showStop');
                Route::post('/stop/{id}', [AgencyManagerManageOffersController::class, 'doStop'])->name('doStop');


                Route::get('/delete/{id}', [AgencyManagerManageOffersController::class, 'showDelete'])->name('showDelete');
                Route::post('/delete/{id}', [AgencyManagerManageOffersController::class, 'doDelete'])->name('doDelete');
            });
        });
    });
});
