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
Route::get('career','CareerController@adminindex')->name('career.index');
Route::post('career','CareerController@apply')->name('career.apply');
Route::get('/how-to-apply','HomeController@howToApply')->name('howtoapply.index');


Route::prefix("student")->group(function(){

  Route::get('/register', 'StudentsController@registerindex')->name('student.register')->middleware('guest');
  Route::post('/register','StudentsController@storeStudent')->name('student.create.account')->middleware('guest');
  Route::get('/login','StudentsController@loginindex')->name('home.student.login.index')->middleware('guest');
  Route::post('/login','StudentsController@login')->name('home.student.login.post');
 Route::get('/logout','StudentsController@logout')->name('home.student.logout');
 Route::get('/admission','StudentsController@studentAdmission')->name('student.admission')->middleware('auth');
  Route::get('/admission/preview/{id}','StudentsController@formpreview')->name('student.admission.preview')->middleware('auth');
  Route::post('/admission','StudentsController@StorestudentAdmission')->name('student.admission.submit')->middleware('auth');
 Route::post('fetch/course','CourseController@fetchCourse')->name('fetch.course');



  Route::get('photo', 'AjaxController@getImage')->name('get.image');
Route::post('photo', 'AjaxController@storeImage')->name('store.image')->middleware('auth');
Route::get('pay/fees/{id?}', 'StudentsController@payStudentFees')->name('student.fees')->middleware('auth');

Route::get('notifications','StudentsController@getNotifications')->name('students.notifications')->middleware('auth');
Route::get('check/fees/{id?}','StudentsController@checkStudentFees')
      ->name('students.checkfees')
      ->middleware('auth');
 Route::get('tnc','StudentsController@tnc')->name('tnc');    
 Route::post('fetch/installment/{id?}', 'StudentsController@fetchInstallmentAmount')->name('fetch.installment.amount')->middleware('auth'); 
 Route::get('form/reset','StudentsController@resetAdmission')->name('form.reset')->middleware('auth');


 // Transaction Routes

Route::post('payment/offline/{id}','StudentsController@initOfflinePayment')->name('payment.offline')->middleware('auth'); 

Route::post('payment/online/{id}','StudentsController@initOnlinePayment')->name('payment.online')->middleware('auth'); 

Route::get('payment/online/process','StudentsController@proccedTransaction')->name('payment.process')->middleware('auth');


Route::post('invoice/download','StudentsController@invoicePriview')->name('invoice.download')->middleware('auth');

 // End Transacion Routes

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
    Route::get('/','AdminController@Studentindex')->name('admission.index');
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
Route::get('/career','CareerController@adminindex')->name('career.index');
Route::get('/inquiry','WebsiteConfigration@inquiryIndex')->name('inquiry.index');
Route::get('/inquiry/{id}','WebsiteConfigration@inquiryRead')->name('inquiry.view');
Route::get('/inquiry/delete/{id}','WebsiteConfigration@DeleteInquiry')->name('inquiry.delete');
Route::get('/updates','WebsiteConfigration@Updatesindex')->name('updates.index');
Route::get('/updates/new','WebsiteConfigration@CreateUpdates')->name('updates.create');
Route::post('/updates/new','WebsiteConfigration@UpdatesStore')->name('updates.store');
Route::get('/updates/delete/{id}','WebsiteConfigration@UpdatesDelete')->name('updates.delete');

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
   Route::get('/', 'AdminController@indexFile')->name('file.index');
    Route::get('new', 'AdminController@createFile')->name('file.create');
    Route::post('new','AdminController@storeFile')->name('file.store');
      Route::get('delete/{id}', 'AdminController@deleteFile')->name('file.delete');
       Route::get('toggle/{id}', 'AdminController@toggleFile')->name('file.toggle');
    
 
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


      Route::group([
          'prefix' => 'list',
],function(){

    Route::get('/applied','CareerController@appliedLits')->name('applied.index');
    Route::get('/applied/{id}','CareerController@adminToggle')->name('applied.toggle');
     Route::get('new','CareerController@adminstoreIndex')->name('career.add.new');
      Route::post('new','CareerController@adminstoreIndex')->name('career.new.store');
 
 
});






   




});



