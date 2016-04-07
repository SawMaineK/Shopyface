<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





Route::resource("users", "UserAPIController");

Route::resource("gcms", "GcmAPIController");

Route::resource("sms", "SmsAPIController");

Route::resource("errorReports", "ErrorReportAPIController");

Route::resource("emails", "EmailAPIController");