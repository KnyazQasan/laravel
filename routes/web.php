<?php
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/admin', 'as' => 'admin-panel.'],function () {

    Route::group(['middleware' => 'isLogin'], function(){
        Route::get("/",     [AuthController::class, 'index'])->name('login');
        Route::post("/",         [AuthController::class, 'login'])->name('login.submit'); 
    });
    Route::group(['middleware' => 'notLogin'], function(){

        Route::view("/dashboard", 'dashboard.index')->name('index');
        Route::get("/settings",  [SettingsController::class, 'index'])->name('settings');
        Route::post("/settings/update", [SettingsController::class, 'update'])->name('settings.update');
      
        Route::get("/logout",    [AuthController::class, 'logout'])->name('logout');
    });
});
