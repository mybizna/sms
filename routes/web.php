<?php

use Illuminate\Support\Facades\Route;
use Modules\Sms\Http\Controllers\OutgoingController;

Route::get('sms/outgoing/{secretkey}', [OutgoingController::class, 'outgoing'])->name('sms_outgoing')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::post('sms/outgoing/{secretkey}', [OutgoingController::class, 'outgoing_update'])->name('sms_outgoing_post')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
