<?php
use Illuminate\Support\Facades\Route;
use Jerickcm\Yeastartg200\Controllers\SendController;

Route::get('test',[SendController::class, 'create']);

Route::post('/sending_sms', [SendController::class, 'sending'])->name('sms-request-sending');
Route::post('/sending_bulk', [SendController::class, 'bulk_sms'])->name('sms-request-bulk');

