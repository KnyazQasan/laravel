<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::view("/admin-panel", 'dashboard.index')->name('admin-panel.index');
Route::get("/admin-panel/settings", [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('admin-panel.settings');
