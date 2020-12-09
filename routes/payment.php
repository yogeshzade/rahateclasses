<?php
use Illuminate\Support\Facades\Route;

route::post('payment/online/callback','StudentsController@callbackTransaction')->name('payment.callback')->middleware(['auth','prevent-back-history']);
