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

            // Designation
            Route::get('designation', 'DesignationController@index')->name('designation');
            Route::post('designation/store', 'DesignationController@store')->name('designation.store');
            Route::get('designation/edit/{designation}', 'DesignationController@edit')->name('designation.edit');
            Route::post('designation/update', 'DesignationController@update')->name('designation.update');
            Route::get('designation/delete/{designation}', 'DesignationController@destroy')->name('designation.delete');

            // Announcement
            Route::get('announcements', 'AnnouncementsController@index')->name('announcements');
            Route::post('announcements/store', 'AnnouncementsController@store')->name('announcements.store');
            Route::get('announcements/edit/{announcement}', 'AnnouncementsController@edit')->name('announcements.edit');
            Route::post('announcements/update', 'AnnouncementsController@update')->name('announcements.update');
            Route::get('announcements/delete/{announcement}', 'AnnouncementsController@delete')->name('announcements.delete');

            // Employee
            Route::get('employee', 'EmployeeController@index')->name('employee');
            Route::post('employee/store', 'EmployeeController@store')->name('employee.store');
            Route::get('employee/edit/{employee}', 'EmployeeController@edit')->name('employee.edit');
            Route::post('employee/update', 'EmployeeController@update')->name('employee.update');
            Route::get('employee/delete/{employee}', 'EmployeeController@delete')->name('employee.delete');

            // Department
            Route::get('department', 'DepartmentController@index')->name('department');
            Route::post('department/store', 'DepartmentController@store')->name('department.store');
            Route::get('department/edit/{department}', 'DepartmentController@edit')->name('department.edit');
            Route::post('department/update', 'DepartmentController@update')->name('department.update');
            Route::get('department/delete/{department}', 'DepartmentController@delete')->name('department.delete');
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
