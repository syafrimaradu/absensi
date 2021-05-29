<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/')->middleware('CheckUserRole');

    Route::prefix('/admin')->name('admin.')->namespace('Admin')->middleware('Admin')->group(function(){
        Route::get('/', 'DashboardController@index')->name('/');
    
        Route::prefix('/hrm')->namespace('Hrm')->group(function(){
            Route::get('overview', 'OverviewController@index')->name('overview');
            Route::get('departments', 'DepartmentsController@index')->name('departments');
            Route::get('employe', 'EmployeController@index')->name('employe');
            Route::get('designation', 'DesignationController@index')->name('designation');
            Route::get('announcements', 'AnnouncementsController@index')->name('announcements');
        });
    
        Route::prefix('/attendance')->namespace('Attendance')->group(function(){
            Route::get('shift', 'ShiftController@index')->name('shift');
            Route::get('tools', 'ToolsController@index')->name('tools');
            Route::get('attendance', 'AttendanceController@index')->name('attendance');
            // // Route::get('qrcode', 'QrcodeController@index')->name('qrcode');
            // Route::get('qrcode', functuin(){
            //     return "ok";
            // })->name("qrcode")
        });
    });
});
