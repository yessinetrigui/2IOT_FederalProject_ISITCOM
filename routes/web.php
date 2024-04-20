<?php
use App\Http\Controllers\Staff\Manager\ManagerAuthController;
use App\Http\Controllers\Staff\Manager\ManagerController;
use App\Http\Controllers\Staff\Admin\AdminAuthController;
use App\Http\Controllers\Staff\Admin\AdminController;
use App\Http\Controllers\Staff\Admin\AdminManageChainController;
use App\Http\Controllers\Staff\Admin\AdminManageHotelController;
use App\Http\Controllers\Staff\Admin\AdminManageHotelExtraChargesController;
use App\Http\Controllers\Staff\Admin\AdminManageHotelOffersController;
use App\Http\Controllers\Staff\Admin\AdminManageHotelRoomsController;
use App\Http\Controllers\Staff\Admin\AdminManageHotelRoomsPricesController;
use App\Http\Controllers\Staff\Admin\Configurations\AdminManageOffersController;
use App\Http\Controllers\Staff\Admin\Configurations\AdminManageRoomsTypesController;
use App\Http\Controllers\Staff\Admin\Configurations\AdminManageZonesController;
use App\Http\Controllers\UserAuth;
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



Route::name('user.')->group(function (){
    Route::redirect('/','/home');
    Route::view('/home','home')->name('home');
    Route::view('/news','Users.news')->name('news');
    Route::view('/profile','Users.profile')->name('profile');

    Route::middleware(['guest:web'])->group(function (){
        //not logged in
        Route::get('/login',[UserAuth::class, 'show_login'])->name('login');
        Route::post('/login',[UserAuth::class, 'verif_login']);
    });
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminAuthController::class, 'doLogin'])->name('doLogin');
    });
    Route::middleware(['guest:web'])->group(function () {
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('showPanel');


        /***** Chaineee Mangerr */
        Route::prefix('chain')->name('chain.')->group(function () {
            Route::get('/show', [AdminManageChainController::class, 'showAll'])->name('showAll');
            Route::get('/show/{id}', [AdminManageChainController::class, 'showPerID'])->name('showPerID');

            Route::prefix('manage')->name('manage.')->group(function () {
                Route::get('/add', [AdminManageChainController::class, 'showAdd'])->name('showAdd');
                Route::post('/add', [AdminManageChainController::class, 'doAdd'])->name('doAdd');

                Route::get('/update/{id}', [AdminManageChainController::class, 'showUpdate'])->name('showUpdate');
                Route::post('/update/{id}', [AdminManageChainController::class, 'doUpdate'])->name('doUpdate');


                Route::get('/stop/{id}', [AdminManageChainController::class, 'showStop'])->name('showStop');
                Route::post('/stop/{id}', [AdminManageChainController::class, 'doStop'])->name('doStop');

                Route::get('/delete/{id}', [AdminManageChainController::class, 'showDelete'])->name('showDelete');
                Route::post('/delete/{id}', [AdminManageChainController::class, 'doDelete'])->name('doDelete');
            });
        });




        /***** rooms Types Mangerr */
        Route::prefix('configurations')->name('configurations.')->group(function () {
            Route::prefix('RoomsTypes')->name('RoomsTypes.')->group(function () {
                Route::get('/show', [AdminManageRoomsTypesController::class, 'showAll'])->name('showAll');
                Route::get('/show/{id}', [AdminManageRoomsTypesController::class, 'showPerID'])->name('showPerID');

                Route::prefix('manage')->name('manage.')->group(function () {
                    Route::get('/add', [AdminManageRoomsTypesController::class, 'showAdd'])->name('showAdd');
                    Route::post('/add', [AdminManageRoomsTypesController::class, 'doAdd'])->name('doAdd');

                    Route::get('/update/{id}', [AdminManageRoomsTypesController::class, 'showUpdate'])->name('showUpdate');
                    Route::post('/update/{id}', [AdminManageRoomsTypesController::class, 'doUpdate'])->name('doUpdate');


                    Route::get('/stop/{id}', [AdminManageRoomsTypesController::class, 'showStop'])->name('showStop');
                    Route::post('/stop/{id}', [AdminManageRoomsTypesController::class, 'doStop'])->name('doStop');


                    Route::get('/delete/{id}', [AdminManageRoomsTypesController::class, 'showDelete'])->name('showDelete');
                    Route::post('/delete/{id}', [AdminManageRoomsTypesController::class, 'doDelete'])->name('doDelete');
                });
            });

            Route::prefix('offers')->name('offers.')->group(function () {
                Route::get('/show', [AdminManageOffersController::class, 'showAll'])->name('showAll');
                Route::get('/show/{id}', [AdminManageOffersController::class, 'showPerID'])->name('showPerID');

                Route::prefix('manage')->name('manage.')->group(function () {
                    Route::get('/add', [AdminManageOffersController::class, 'showAdd'])->name('showAdd');
                    Route::post('/add', [AdminManageOffersController::class, 'doAdd'])->name('doAdd');

                    Route::get('/update/{id}', [AdminManageOffersController::class, 'showUpdate'])->name('showUpdate');
                    Route::post('/update/{id}', [AdminManageOffersController::class, 'doUpdate'])->name('doUpdate');


                    Route::get('/stop/{id}', [AdminManageOffersController::class, 'showStop'])->name('showStop');
                    Route::post('/stop/{id}', [AdminManageOffersController::class, 'doStop'])->name('doStop');


                    Route::get('/delete/{id}', [AdminManageOffersController::class, 'showDelete'])->name('showDelete');
                    Route::post('/delete/{id}', [AdminManageOffersController::class, 'doDelete'])->name('doDelete');
                });
            });

            Route::prefix('zones')->name('zones.')->group(function () {
                Route::get('/show', [AdminManageZonesController::class, 'showAll'])->name('showAll');
                Route::get('/show/{id}', [AdminManageZonesController::class, 'showPerID'])->name('showPerID');

                Route::prefix('manage')->name('manage.')->group(function () {
                    Route::get('/add', [AdminManageZonesController::class, 'showAdd'])->name('showAdd');
                    Route::post('/add', [AdminManageZonesController::class, 'doAdd'])->name('doAdd');

                    Route::get('/update/{id}', [AdminManageZonesController::class, 'showUpdate'])->name('showUpdate');
                    Route::post('/update/{id}', [AdminManageZonesController::class, 'doUpdate'])->name('doUpdate');


                    Route::get('/stop/{id}', [AdminManageZonesController::class, 'showStop'])->name('showStop');
                    Route::post('/stop/{id}', [AdminManageZonesController::class, 'doStop'])->name('doStop');


                    Route::get('/delete/{id}', [AdminManageZonesController::class, 'showDelete'])->name('showDelete');
                    Route::post('/delete/{id}', [AdminManageZonesController::class, 'doDelete'])->name('doDelete');
                });
            });
        });



            Route::prefix('hotel')->name('hotel.')->group(function () {
                Route::get('/show', [AdminManageHotelController::class, 'showAll'])->name('showAll');
                Route::get('/show/{idHotel}', [AdminManageHotelController::class, 'showPerID'])->name('showPerID');
                Route::prefix('manage')->name('manage.')->group(function () {
                    Route::get('/add', [AdminManageHotelController::class, 'showAdd'])->name('showAdd');
                    Route::post('/add', [AdminManageHotelController::class, 'doAdd'])->name('doAdd');
                });
                Route::prefix('{idHotel}/manage')->name('manage.')->group(function () {

                    Route::get('/update', [AdminManageHotelController::class, 'showUpdate'])->name('showUpdate');
                    Route::post('/update', [AdminManageHotelController::class, 'doUpdate'])->name('doUpdate');

                    Route::get('/stop', [AdminManageHotelController::class, 'showStop'])->name('showStop');
                    Route::post('/stop', [AdminManageHotelController::class, 'doStop'])->name('doStop');

                    Route::get('/delete', [AdminManageHotelController::class, 'showDelete'])->name('showDelete');
                    Route::post('/delete', [AdminManageHotelController::class, 'doDelete'])->name('doDelete');


                    Route::prefix('rooms')->name('rooms.')->group(function () {
                        Route::get('/show', [AdminManageHotelRoomsController::class, 'showAll'])->name('showAll');
                        Route::get('/show/{id}', [AdminManageHotelRoomsController::class, 'showPerID'])->name('showPerID');

                        Route::get('/add', [AdminManageHotelRoomsController::class, 'showAdd'])->name('showAdd');
                        Route::post('/add', [AdminManageHotelRoomsController::class, 'doAdd'])->name('doAdd');

                        Route::get('/update/{id}', [AdminManageHotelRoomsController::class, 'showUpdate'])->name('showUpdate');
                        Route::post('/update/{id}', [AdminManageHotelRoomsController::class, 'doUpdate'])->name('doUpdate');

                        Route::get('/stop/{id}', [AdminManageHotelRoomsController::class, 'showStop'])->name('showStop');
                        Route::post('/stop/{id}', [AdminManageHotelRoomsController::class, 'doStop'])->name('doStop');

                        Route::get('/delete/{id}', [AdminManageHotelRoomsController::class, 'showDelete'])->name('showDelete');
                        Route::post('/delete/{id}', [AdminManageHotelRoomsController::class, 'doDelete'])->name('doDelete');


                        Route::prefix('prices')->name('prices.')->group(function () {
                            Route::get('/show', [AdminManageHotelRoomsPricesController::class, 'showAll'])->name('showAll');
                            Route::get('/add', [AdminManageHotelRoomsPricesController::class, 'showAdd'])->name('showAdd');
                            Route::post('/add', [AdminManageHotelRoomsPricesController::class, 'doAdd'])->name('doAdd');

                           Route::get('/update/{id}', [AdminManageHotelRoomsPricesController::class, 'showUpdate'])->name('showUpdate');
                            Route::post('/update/{id}', [AdminManageHotelRoomsPricesController::class, 'doUpdate'])->name('doUpdate');


                            Route::get('/delete/{id}', [AdminManageHotelRoomsPricesController::class, 'showDelete'])->name('showDelete');
                            Route::post('/delete/{id}', [AdminManageHotelRoomsPricesController::class, 'doDelete'])->name('doDelete');

                        });
                    });

                    Route::prefix('offers')->name('offers.')->group(function () {
                        Route::get('/show', [AdminManageHotelOffersController::class, 'showAll'])->name('showAll');
                        Route::get('/show/{id}', [AdminManageHotelOffersController::class, 'showPerID'])->name('showPerID');

                        Route::get('/add', [AdminManageHotelOffersController::class, 'showAdd'])->name('showAdd');
                        Route::post('/add', [AdminManageHotelOffersController::class, 'doAdd'])->name('doAdd');

                        Route::get('/update/{id}', [AdminManageHotelOffersController::class, 'showUpdate'])->name('showUpdate');
                        Route::post('/update/{id}', [AdminManageHotelOffersController::class, 'doUpdate'])->name('doUpdate');

                        Route::get('/stop/{id}', [AdminManageHotelOffersController::class, 'showStop'])->name('showStop');
                        Route::post('/stop/{id}', [AdminManageHotelOffersController::class, 'doStop'])->name('doStop');

                        Route::get('/delete/{id}', [AdminManageHotelOffersController::class, 'showDelete'])->name('showDelete');
                        Route::post('/delete/{id}', [AdminManageHotelOffersController::class, 'doDelete'])->name('doDelete');
                    });

                    Route::prefix('extracharges')->name('extracharges.')->group(function () {
                        Route::get('/show', [AdminManageHotelExtraChargesController::class, 'showAll'])->name('showAll');
                        Route::get('/show/{id}', [AdminManageHotelExtraChargesController::class, 'showPerID'])->name('showPerID');

                        Route::get('/add', [AdminManageHotelExtraChargesController::class, 'showAdd'])->name('showAdd');
                        Route::post('/add', [AdminManageHotelExtraChargesController::class, 'doAdd'])->name('doAdd');

                        Route::get('/update/{id}', [AdminManageHotelExtraChargesController::class, 'showUpdate'])->name('showUpdate');
                        Route::post('/update/{id}', [AdminManageHotelExtraChargesController::class, 'doUpdate'])->name('doUpdate');

                        Route::get('/stop/{id}', [AdminManageHotelExtraChargesController::class, 'showStop'])->name('showStop');
                        Route::post('/stop/{id}', [AdminManageHotelExtraChargesController::class, 'doStop'])->name('doStop');

                        Route::get('/delete/{id}', [AdminManageHotelExtraChargesController::class, 'showDelete'])->name('showDelete');
                        Route::post('/delete/{id}', [AdminManageHotelExtraChargesController::class, 'doDelete'])->name('doDelete');
                    });

                });
            });
    });
});



Route::prefix('manager')->name('manager.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        Route::get('/login', [ManagerAuthController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [ManagerAuthController::class, 'doLogin'])->name('doLogin');
    });
    Route::middleware(['guest:web'])->group(function () {
        Route::get('/logout', [ManagerAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [ManagerController::class, 'showDashboard'])->name('showPanel');
    });
});
