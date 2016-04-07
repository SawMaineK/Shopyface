<?php

/*
|--------------------------------------------------------------------------
| Scaffold Routes
|--------------------------------------------------------------------------
|
| Here is where all scaffold routes are defined.
|
*/

Route::resource('generators', 'GeneratorController');

Route::get('generators/{id}/delete', [
    'as' => 'generators.delete',
    'uses' => 'GeneratorController@destroy',
]);


Route::resource('users', 'UserController');

Route::get('users/{id}/delete', [
    'as' => 'admin.users.delete',
    'uses' => 'UserController@destroy',
]);


Route::resource('gcms', 'GcmController');

Route::get('gcms/{id}/delete', [
    'as' => 'admin.gcms.delete',
    'uses' => 'GcmController@destroy',
]);


Route::resource('sms', 'SmsController');

Route::get('sms/{id}/delete', [
    'as' => 'admin.sms.delete',
    'uses' => 'SmsController@destroy',
]);


Route::resource('errorReports', 'ErrorReportController');

Route::get('errorReports/{id}/delete', [
    'as' => 'admin.errorReports.delete',
    'uses' => 'ErrorReportController@destroy',
]);


Route::resource('emails', 'EmailController');

Route::get('emails/{id}/delete', [
    'as' => 'admin.emails.delete',
    'uses' => 'EmailController@destroy',
]);
