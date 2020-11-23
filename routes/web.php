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
Auth::routes(['register' => false]);

Route::get('/','HomeController@index')->name('home.index');
Route::get('/courses','HomeController@getCourses')->name('home.course.index');
Route::get('/contact','HomeController@contact')->name('home.contact');
Route::post('/sendinquiry','HomeController@storeInquiry')->name('inquiry.store');
Route::get('/contact_send','HomeController@contactsend')->name('home.contact.send');
Route::get('apply-online','StudentsController@admission')->name('student.admission.index');
Route::get('career','CareerController@index')->name('career.index');


Route::prefix("student")->group(function(){

  Route::get('/register', 'StudentsController@registerindex')->name('student.register')->middleware('guest');
  Route::post('/register','StudentsController@storeStudent')->name('student.create.account')->middleware('guest');
  Route::get('/login','StudentsController@loginindex')->name('home.student.login.index')->middleware('guest');
  Route::post('/login','StudentsController@login')->name('home.student.login.post');
 Route::get('/logout','StudentsController@logout')->name('home.student.logout');
 Route::get('/admission','StudentsController@studentAdmission')->name('student.admission')->middleware('auth');
  Route::post('/admission','StudentsController@StorestudentAdmission')->name('student.admission.submit')->middleware('auth');

});

// Student Dashboard


Route::prefix("student")->middleware(['auth','checkStudent'])->group(function(){

Route::get('/dashboard','StudentsController@studentDashboardIndex')->name('student.dashboard');

});


// End Student Dashboard



Route::get('reload-captcha', 'CaptchaServiceController@reloadCaptcha')->name('captcha.reload');
Route::get('/verify','StudentsController@verifyemail')->name('email.verify');


Route::prefix("admin")->middleware(['auth','checkAdmin'])->group(function(){

Route::group([], function () {
   Route::get('pages-logout', 'RoutingController@logout')->name('logout');
    Route::get('/', 'RoutingController@index')->name('home');
});

Route::group([
  'prefix' => 'settings'
],function(){
  Route::get('/profile','AdminController@index')->name('profile.index');
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
    Route::get('/toggle/{id}','CourseController@toggleCoursestatus')->name('course.toggle');
    Route::get('fetch/class','CourseController@fetchClass')->name('fetch.class');
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


Route::group([
  'prefix' => 'settings'
],function(){
Route::get('/slider','WebsiteConfigration@sliderindex')->name('slider.index');
Route::get('/slider/new','WebsiteConfigration@slidercreate')->name('slider.add');
Route::post('/slider/new','WebsiteConfigration@sliderStore')->name('slider.store');
Route::get('/slider/toggle/{id}','WebsiteConfigration@toggleslider')->name('slider.toggle');
Route::get('/popup/create','WebsiteConfigration@popupCreate')->name('popup.create');
Route::post('/popup/create','WebsiteConfigration@popupStore')->name('popup.store');
Route::get('/popup/toggle/{id}','WebsiteConfigration@togglePopup')->name('popup.toggle');
Route::get('/career','WebsiteConfigration@CareerIndex')->name('career.index');
Route::get('/inquiry','WebsiteConfigration@inquiryIndex')->name('inquiry.index');
Route::get('/inquiry/{id}','WebsiteConfigration@inquiryRead')->name('inquiry.view');
Route::get('/inquiry/delete/{id}','WebsiteConfigration@DeleteInquiry')->name('inquiry.delete');
Route::get('/updates','WebsiteConfigration@sliderindex')->name('updates.index');
});


 Route::group([
          'prefix' => 'calender',
],function(){
   Route::get('/', 'AdmissionController@indexCalender')->name('calender.index');
    Route::get('new', 'AdmissionController@createCalender')->name('calender.create');
    Route::post('new','AdmissionController@storeCalender')->name('calender.store');
      Route::get('delete/{id}', 'AdmissionController@deleteCalander')->name('calender.delete');
       Route::get('toggle/{id}', 'AdmissionController@toggleCourse')->name('calender.toggle');
    
 
});


  Route::group([
          'prefix' => 'file',
],function(){
   Route::get('/', 'AdmissionController@indexFile')->name('file.index');
    Route::get('new', 'AdmissionController@createFile')->name('file.create');
    Route::post('new','AdmissionController@storeFile')->name('file.store');
      Route::get('delete/{id}', 'AdmissionController@deleteFile')->name('file.delete');
       Route::get('toggle/{id}', 'AdmissionController@toggleFile')->name('file.toggle');
    
 
});

   Route::group([
          'prefix' => 'installment',
],function(){
  Route::get('/', 'CourseController@indexInstallment')->name('installment.index');
  Route::get('/create', 'CourseController@createInstallment')->name('installment.create');
  Route::post('/create', 'CourseController@storeInstallment')->name('installment.store');
  Route::get('/total_installments', 'CourseController@getInstallmentNo')->name('installment.number');
   Route::get('/show_installments/{id}', 'CourseController@getInstallments')->name('installment.view');
    
 
});

   




});



