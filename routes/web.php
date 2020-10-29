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

Route::get('/','HomeController@index')->name('home.index');
Route::get('/courses','HomeController@getCourses')->name('home.course.index');
Route::get('/contact','HomeController@contact')->name('home.contact');
Route::get('/contact_send','HomeController@contactsend')->name('home.contact.send');
Route::get('student/login','StudentsController@loginindex')->name('home.student.login.index')->middleware('guest');
Route::post('student/login','StudentsController@login')->name('home.student.login.post');
Route::get('apply-online','StudentsController@admission')->name('student.admission.index');
Route::get('career','CareerController@index')->name('career.index');
Route::prefix("admin")->middleware(['auth'])->group(function(){

Route::group([], function () {
   Route::get('pages-logout', 'RoutingController@logout')->name('logout');
    Route::get('/', 'RoutingController@index')->name('home');
    // Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
    // Route::get('{first}/{second}', 'RoutingController@secondLevel');
    // Route::get('{any}', 'RoutingController@root');
});


 Route::group([
          'prefix' => 'admission',
],function(){
    Route::get('new', 'AdmissionController@index')->name('admission.index');
    Route::post('new','AdmissionController@store')->name('admission.store');
    Route::post('manage','AdmissionController@manage')->name('admission.manage');
});

 Route::group([
          'prefix' => 'course',
],function(){
    Route::get('/', 'CourseController@index')->name('course.index');
    Route::get('create','CourseController@create')->name('course.create');
    Route::post('/create','CourseController@store')->name('course.store');
});


 Route::group([
          'prefix' => 'employee'
],function(){
  Route::get('/','EmployeeController@index')->name('employee.index');
    Route::get('new','EmployeeController@create')->name('employee.add');
  Route::post('new','EmployeeController@store')->name('employee.store');
  Route::get('view/{id}','EmployeeController@show')->name('employee.show');
  Route::get('edit/{id}','EmployeeController@edit')->name('employee.edit');
  Route::get('delete/{id}','EmployeeController@destroy')->name('employee.delete');

});



});



