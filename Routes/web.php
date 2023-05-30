<?php

use Illuminate\Support\Facades\Route;

Route::get ( 'sms/outgoing/{secretkey}', 'OutgoingController@outgoing')->name('sms_outgoing')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::post ( 'sms/outgoing/{secretkey}', 'OutgoingController@outgoing_update')->name('sms_outgoing')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
