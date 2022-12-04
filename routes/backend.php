<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\DashboardController;
Route::as('admin.')->prefix('admin')->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('dashboard','index')->name('dashboard');
    });
});
