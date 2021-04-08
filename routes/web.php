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
Route::get('/faculties-page','HomeController@faculties')->name('home.faculties');
Route::post('/sendinquiry','HomeController@storeInquiry')->name('inquiry.store');
Route::get('/contact_send','HomeController@contactsend')->name('home.contact.send');
Route::get('apply-online','StudentsController@admission')->name('student.admission.index');
Route::get('career','CareerController@index')->name('career.index');
Route::post('career','CareerController@apply')->name('career.apply');
Route::get('/how-to-apply','HomeController@howToApply')->name('howtoapply.index');
Route::get('/fees-structure','HomeController@feesStructure')->name('feesStruct.index');
Route::get('/view-notes','HomeController@authPage')->name('view-notes.index')->middleware('auth');
Route::post('/view-notes','HomeController@authForNotes')->name('view-notes.auth');
Route::get('/rahates-results','HomeController@authForNotes')->name('results.index');
Route::get('/show-notes','HomeController@showNotes')->name('shownotes.index')->middleware('auth');
Route::get('/show-notes-of','HomeController@showNotesof')->name('shownotesof.index')->middleware('auth');
Route::get('/open-notes-of/{id}','HomeController@openNotesof')->name('opennotesof.index')->middleware('auth');
Route::get('/sync-program','HomeController@syncprogram')->name('syncprogram.index');
Route::get('/about-us','HomeController@aboutus')->name('aboutus.index');
Route::get('/','HomeController@prefoundation')->name('prefoundation.index')

Route::prefix("student")->group(function(){

  Route::get('/register', 'StudentsController@registerindex')->name('student.register')->middleware('guest');
  Route::post('/register','StudentsController@storeStudent')->name('student.create.account')->middleware('guest');
  Route::get('/login','StudentsController@loginindex')->name('home.student.login.index')->middleware('guest');
  Route::post('/login','StudentsController@login')->name('home.student.login.post');
 Route::get('/logout','StudentsController@logout')->name('home.student.logout');
 Route::get('/admission','StudentsController@studentAdmission')->name('student.admission')->middleware('auth');
  Route::get('/admission/preview/{id}','StudentsController@formpreview')->name('student.admission.preview')->middleware('auth');
  Route::post('/admission','StudentsController@StorestudentAdmission')->name('student.admission.submit')->middleware('auth');
 Route::any('fetch/course','CourseController@fetchCourse')->name('fetch.course');



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

Route::get('verify/otp','StudentsController@sendotp')->name('student.sendotp')->middleware(['auth']);
Route::post('verify/otp','StudentsController@verifyMobile')->name('student.verifymobile')->middleware(['auth','throttle:3,5']);
Route::post('/resend/otp','StudentsController@resendotp')->name('student.resendotp')->middleware(['auth','throttle:1,2']);


Route::prefix("student")->middleware(['auth','checkStudent','verifyMobile'])->group(function(){

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
     Route::get('approve/{id}','AdminController@ApproveAdmission')->name('admission.approve');
      Route::get('view/{id}','AdminController@ViewAdmission')->name('admission.view');
   
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
Route::get('/career','CareerController@adminindex')->name('career.index.admin');
Route::get('/inquiry','WebsiteConfigration@inquiryIndex')->name('inquiry.index');
Route::get('/inquiry/{id}','WebsiteConfigration@inquiryRead')->name('inquiry.view');
Route::get('/inquiry/delete/{id}','WebsiteConfigration@DeleteInquiry')->name('inquiry.delete');
Route::get('/updates','WebsiteConfigration@Updatesindex')->name('updates.index');
Route::get('/updates/new','WebsiteConfigration@CreateUpdates')->name('updates.create');
Route::post('/updates/new','WebsiteConfigration@UpdatesStore')->name('updates.store');
Route::get('/updates/delete/{id}','WebsiteConfigration@UpdatesindexDelete')->name('updates.delete');

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
        Route::get('edit/{id}','CareerController@adminstoreEdit')->name('career.edit');
      Route::post('new','CareerController@adminstore')->name('career.new.store');
 
 
});



Route::group([
          'prefix' => 'payments',
],function(){

    Route::get('/pending','AdminController@pendingPayments')->name('pending.payments');
 
});


Route::group([
          'prefix' => 'testimonials',
],function(){

    Route::get('/','AdminController@TestimonialsIndex')->name('testimonials.index');
    Route::get('/create','AdminController@TestimonialsCreate')->name('testimonials.create');
    Route::post('/create','AdminController@TestimonialsStore')->name('testimonials.store');
    Route::get('/delete/{id}','AdminController@TestimonialsDelete')->name('testimonials.delete');
});




Route::group([
          'prefix' => 'teachers',
],function(){

    Route::get('/','AdminController@TeachersIndex')->name('teachers.index');
    Route::get('/create','AdminController@TeachersCreate')->name('teachers.create');
    Route::post('/create','AdminController@TeachersStore')->name('teachers.store');
    Route::get('/delete/{id}','AdminController@TeachersDelete')->name('teachers.delete');
    Route::get('/edit/{tid}','AdminController@TeachersEdit')->name('teachers.edit');
    Route::post('/update/{tid}','AdminController@TeachersUpdate')->name('teachers.update');
});



Route::group([
          'prefix' => 'notes',
],function(){

    Route::get('/','AdminController@NotesIndex')->name('notes.index');
    Route::get('/create','AdminController@NotesCreate')->name('notes.create');
    Route::post('/create','AdminController@NotesStore')->name('notes.store');
    Route::get('/delete/{id}','AdminController@NotesDelete')->name('notes.delete');
});









   




});



