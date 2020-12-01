<?php
use Illuminate\Support\Facades\Route;

Route::post('payment/online/callback','StudentsController@callbackTransaction')->name('payment.callback')->middleware(['auth','prevent-back-history']);
