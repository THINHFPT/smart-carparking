<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Parking_Managers_Controller;
use App\Http\Controllers\Admin\Parking_Home_Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\DriverController;
use App\Http\Controllers\User\SpotController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\Parking\ParkingController;
use App\Http\Controllers\Parking\ParkingHomeController;
/* Admin */
//Route::get('/', function (){
//    return view('admin.index');
//});
//
//Route::get('/create', function (){
//    return view('Admin.create');
//});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware('guest:admin')->group(function (){
        Route::view('/login', 'admin.login')->name('login');
        Route::view('/register', 'admin.register')->name('register');
        Route::post('/createUser',[AdminController::class,'createUser'])->name('createUser');
        Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware('auth:admin')->group(function (){
        Route::view('/home', 'admin.index')->name('home');
        Route::post("/logout",[AdminController::class,'logout'])->name('logout');
        Route::resources(['parking_homes'=>Parking_Home_Controller::class]);
        Route::resources(['parking_managers'=>Parking_Managers_Controller::class ],
        );
        Route::resources(['drivers'=>Parking_Managers_Controller::class ],
        );
    });
});

Route::prefix('user')->name('user.')->group(function (){
    Route::view('/login', 'user.login')->name('login');
    Route::view('/register', 'user.register')->name('register');
    Route::post('/createUser',[DriverController::class,'createUser'])->name('createUser');
    Route::get('/home', [DriverController::class,'home'])->name('home');
    Route::get('/slot', [SpotController::class,'showParkingHome'])->name('slot');
    Route::get('/bookCart/{id}', [SpotController::class,'bookCart'])->name('bookCart');
//    Route::get('/home', [SpotController::class,'showParkingHome'])->name('home');


    Route::post('/check', [DriverController::class,'checkUser'])->name('check');
    Route::post('/logout', [DriverController::class,'logout'])->name('logout');
    Route::post('/createSpot', [SpotController::class,'createSpot'])->name('createSpot');
    Route::get('/action',[SearchController::class,'action'])->name('action');// ajax
});


Route::prefix('parking')->name('parking.')->group(function (){
    Route::middleware('guest:parking')->group(function (){
        Route::view('/login', 'nhaxe.login')->name('login');
        Route::view('/register', 'nhaxe.register')->name('register');
        Route::post('/createUser', [ParkingController::class, 'createUser'])->name('createUser');
        Route::post('/checkUser', [ParkingController::class, 'checkUser'])->name('checkUser');
    });
    Route::middleware('auth:parking')->group(function (){
        Route::view('/profile','nhaxe.profile')->name('profile');
        Route::get('/editHome/{id}',[ParkingHomeController::class,'editHome'])->name('editHome');
        Route::get('/listDriver/{id}',[ParkingController::class,'listDriver'])->name('listDriver');
        Route::put('/updateHome/{id}',[ParkingHomeController::class,'updateHome'])->name('updateHome');
        Route::get('/home',[ParkingController::class,'index'])->name('home');
        Route::post('/logout',[ParkingController::class,'logout'])->name('logout');
        Route::post('/createParkingHome', [ParkingHomeController::class,'createParkingHome'])->name('createParkingHome');
    });
});







