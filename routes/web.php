<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin', "AdminController@loginPage")->middleware('checkAuth');
Route::post('/login-admin', "AdminController@loginAdmin")->name('checkAuth');
Route::get('/', "UserController@loginPage")->middleware('checkAuth');
Route::get('/register', "UserController@registerPage")->middleware('checkAuth');
Route::post('/register-user', "UserController@registerUser")->middleware('checkAuth');
Route::post('/login-user', "UserController@loginUser")->name('checkAuth');
Route::get('/home', "HomeController@showDashboard")->middleware('dashboard');
Route::get('/courses', 'CourseController@getCourseListView')->middleware('dashboard');
Route::get('/add-course', "CourseController@getAddCourseView")->middleware('dashboard');
Route::post('/save-course', "CourseController@saveCourse")->middleware('dashboard');
Route::get('edit-course/{id}', "CourseController@editCourseView")->middleware('dashboard');
Route::post('/save-edited-course', "CourseController@saveEditedCourse")->middleware('dashboard');
Route::get('view-student-of-course/{id}', "CourseController@studentsOfCourseView")->middleware('dashboard');
Route::post('/save-student-added-in-course', "CourseController@saveStudentAddedInCourse")->middleware('dashboard');
Route::get('remove-student/{studentId}/course/{courseId}', "CourseController@removeStudent")->middleware('dashboard');
Route::get('/family-profile', "FamilyController@getFamilyProfileView")->middleware('dashboard');
Route::post('/save-family-profile', "FamilyController@saveFamilyProfile")->middleware('dashboard');
Route::get('/student-profile', "StudentController@getStudentProfileView")->middleware('dashboard');
Route::get('/add-student-view', "StudentController@getAddStudentView")->middleware('dashboard');
Route::get('/add-family-view', "FamilyController@getAddFamilyView")->middleware('dashboard');
Route::post('/save-student-profile', "StudentController@saveStudentProfile")->middleware('dashboard');
Route::post('/save-student-by-admin', "StudentController@saveStudentByAdmin")->middleware('dashboard');
Route::post('/save-family-by-admin', "FamilyController@saveFamilyByAdmin")->middleware('dashboard');
Route::get('/students', 'StudentController@getStudentListView')->middleware('dashboard');
Route::get('/edit-student/{id}', 'StudentController@getEditStudentView')->middleware('dashboard');
Route::get('/edit-family/{id}', 'FamilyController@getEditFamilyView')->middleware('dashboard');
Route::post('/save-student-edited-details', 'StudentController@saveStudentEditedDetails')->middleware('dashboard');
Route::post('/save-family-edited-details', 'FamilyController@saveFamilyEditedDetails')->middleware('dashboard');
Route::get('/families', 'FamilyController@getFamilyListView')->middleware('dashboard');
Route::get('/student-my-course', 'StudentController@getStudentCourseListView')->middleware('dashboard');


Route::get('/get-chat-ping-count', "CustomerController@getChatCount");
Route::post('/admin/login', "AdminController@login")->name('admin.login');
//Route::get('admin-dashboard', "AdminController@adminDashboard");
Route::post('admin-logout', "AdminController@logout")->name('admin.logout');

//Route::get('fbx', function (){
//  return view('fbx');
//});

Route::get('logout-user', function (){
    \Illuminate\Support\Facades\Session::flush();
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
})->name('logout-user');



//Route::get('category', 'CategoryController@getCategoryView')->middleware('dashboard');
//Route::get('add-category', "CategoryController@getAddCategoryView")->middleware('dashboard');
//Route::post('save-category', "CategoryController@saveCategory")->middleware('dashboard');
//Route::get('delete-category/{id}', "CategoryController@deleteCategory")->middleware('dashboard');
//Route::get('edit-category/{id}', "CategoryController@editCategory")->middleware('dashboard');
//Route::post('save-edited-category', "CategoryController@saveEditedCategory")->middleware('dashboard');
//
//Route::get('events', 'EventsController@getEventListView')->middleware('dashboard');
//Route::get('add-event', "EventsController@getAddEventView")->middleware('dashboard');
//Route::post('save-event', "EventsController@saveEvent")->middleware('dashboard');
//Route::get('delete-event/{id}', "EventsController@deleteEvent")->middleware('dashboard');
//Route::get('edit-event/{id}', "EventsController@editEvent")->middleware('dashboard');
//Route::post('save-edited-event', "EventsController@saveEditedEvent")->middleware('dashboard');
//
//Route::get('calender', 'CalenderController@getCalenderView')->middleware('dashboard');
//Route::get('get-calender', 'CalenderController@getCalendarData')->middleware('dashboard');
//Route::post('calendar/create','CalenderController@create');
//Route::post('calendar/update','CalenderController@update');
//Route::post('calendar/delete','CalenderController@destroy');
//
//new work
//Route::post('login', "AdminController@login")->name('login');
//
//Route::get('/chat', "HomeController@chat")->middleware('dashboard');
//Route::get('/chat-details/{id}', "HomeController@chatDetails")->middleware('dashboard');
//Route::post('/send-sms/{parentId}', "HomeController@sendSMS");
//
//Route::get('staff', 'StaffController@getStaffListView')->middleware('dashboard');
//Route::get('add-staff', "StaffController@getAddStaffView")->middleware('dashboard');
//Route::post('save-staff', "StaffController@saveStaff");
//Route::get('delete-staff/{id}', "StaffController@deleteStaff")->middleware('dashboard');
//Route::get('edit-staff/{id}', "StaffController@editStaff")->middleware('dashboard');
//Route::post('save-edited-staff', "StaffController@saveEditedStaff");
//
//Route::get('customer', 'CustomerController@getCustomerListView')->middleware('dashboard');
//Route::get('add-customer', "CustomerController@getAddCustomerView")->middleware('dashboard');
//Route::post('save-customer', "CustomerController@saveCustomer");
//Route::get('delete-customer/{id}', "CustomerController@deleteCustomer")->middleware('dashboard');
//Route::get('edit-customer/{id}', "CustomerController@editCustomer")->middleware('dashboard');
//Route::post('save-edited-customer', "CustomerController@saveEditedCustomer");
//
//Route::get('message-template', 'MessageTemplateController@getMessageTemplateListView')->middleware('dashboard');
//Route::get('add-message-template', "MessageTemplateController@getAddMessageTemplateView")->middleware('dashboard');
//Route::post('save-message-template', "MessageTemplateController@saveMessageTemplate");
//Route::get('delete-message-template/{id}', "MessageTemplateController@deleteMessageTemplate")->middleware('dashboard');
//Route::get('edit-message-template/{id}', "MessageTemplateController@editMessageTemplate")->middleware('dashboard');
//Route::post('save-edited-message-template', "MessageTemplateController@saveEditedMessageTemplate");
//
//Route::post('login-staff', "StaffController@login");
//Route::post('send-sms-to-checked', "CustomerController@sendSmsToChecked");
//Route::post('send-sms-to-checked-customers', "CustomerController@sendSmsToCheckedCustomer");
//Route::post('delete-checked-customers', "CustomerController@deleteCheckedCustomer");
//Route::post('delete-checked-chats', "CustomerController@deleteCheckedChats");
//Route::post('customers/all', "CustomerController@getAll");
//Route::post('chats/all', "CustomerController@getAllChats");
//
//Route::post('/import_excel/import', 'ImportExcelController@import');
//Route::get('icoming-sms', 'HomeController@icomingSms');
