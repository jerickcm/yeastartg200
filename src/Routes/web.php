<?php
use Illuminate\Support\Facades\Route;
use Jerickcm\Yeastartg200\Controllers\TestController;

Route::get('test',[TestController::class, 'create']);

Route::post('/sending_sms', [TestController::class, 'sending'])->name('sms-request-sending');

