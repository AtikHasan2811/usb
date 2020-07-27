<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', function () {
    return view('viewApplication');
});

Route::get('/viewInvoice', function () {
    return view('viewInvoice');
});
Route::get('/printInvoice', function () {
    return view('printInvoice');
});
//Route::get('/auditordashboard','AuditReportController@auditorDashboard')->name('auditorDashboard');
//Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
