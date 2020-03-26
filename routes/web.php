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
Auth::routes();

Route::get('/',function(){

	return "Home Page";

})->name('home');

Route::prefix("admin")->middleware(['auth','is_admin'])->group(function(){

Route::group([], function () {
    Route::get('pages-logout', 'RoutingController@logout')->name('logout');
    Route::get('/', 'RoutingController@index');
    Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
    Route::get('{first}/{second}', 'RoutingController@secondLevel');
    Route::get('{any}', 'RoutingController@root');
});


 Route::group([
          'prefix' => 'admission',
],function(){
    Route::get('new', 'AdmissionController@index')->name('admission.index');
    Route::post('new','AdmissionController@store')->name('admission.store');
    Route::post('manage','AdmissionController@manage')->name('admission.manage');
});

});

