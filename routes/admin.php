<?php

use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TestController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){

    Route::get('/',[RoomController::class,'index'])->name('admin.room');
    Route::post('/check',[RoomController::class,'check'])->name('admin.room.check');

    Route::controller(UserController::class)->middleware('adminPanel')->group(function(){
        Route::get('/user','index')->name('admin.user');
        Route::post('/user', 'store')->name('admin.user.store');
        Route::get('/user/{id}','show')->name('admin.user.show');
        Route::get('/user/{id}/edit','edit')->name('admin.user.edit');
        Route::post('/user/{id}/update','update')->name('admin.user.update');
        Route::get('/user/{id}/delete','delete')->name('admin.user.delete');
    });

    Route::controller(TestController::class)->middleware('adminPanel')->group(function(){
        Route::get('/test','index')->name('admin.test');
        Route::post('/test', 'store')->name('admin.test.store');
        Route::get('/test/{id}','show')->name('admin.test.show');
        Route::get('/test/{id}/edit','edit')->name('admin.test.edit');
        Route::post('/test/{id}/update','update')->name('admin.test.update');
        Route::get('/test/{id}/delete','delete')->name('admin.test.delete');
    });

});
