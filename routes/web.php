<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/')->middleware('CheckUserRole');

    Route::prefix('/admin')->name('admin.')->namespace('Admin')->middleware('Admin')->group(function(){
        Route::get('/', 'DashboardController@index')->name('/');
    
        Route::prefix('/hrm')->name('hrm.')->namespace('Hrm')->group(function(){
            // Overview
            Route::get('overview', 'OverviewController@index')->name('overview');
            Route::get('departments', 'DepartmentsController@index')->name('departments');
            Route::get('employe', 'EmployeController@index')->name('employe');

            // Designation
            Route::get('designation', 'DesignationController@index')->name('designation');
            Route::post('designation/store', 'DesignationController@store')->name('designation.store');
            Route::get('designation/edit/{id}', 'DesignationController@edit')->name('designation.edit');
            Route::post('designation/update', 'DesignationController@update')->name('designation.update');
            Route::get('designation/delete/{id}', 'DesignationController@destroy')->name('designation.delete');

            // Announcement
            Route::get('announcements', 'AnnouncementsController@index')->name('announcements');
            Route::post('announcements/store', 'AnnouncementsController@store')->name('announcements.store');
            Route::get('announcements/edit/{announcement}', 'AnnouncementsController@edit')->name('announcements.edit');
            Route::post('announcements/update', 'AnnouncementsController@update')->name('announcements.update');
            Route::get('announcements/delete/{announcement}', 'AnnouncementsController@delete')->name('announcements.delete');

        });
    
        Route::prefix('/attendance')->namespace('Attendance')->group(function(){
            Route::get('overview-attendance', 'OverviewAttController@index')->name('ov-attendance');
            Route::get('shift', 'ShiftController@index')->name('shift');
            Route::get('tools', 'ToolsController@index')->name('tools');
            Route::get('attendance', 'AttendanceController@index')->name('attendance');
            Route::get('qrcode', 'QrcodeController@index')->name('qrcode');
            Route::get('setting', 'SettingController@index')->name('setting');
        });
    });
});
