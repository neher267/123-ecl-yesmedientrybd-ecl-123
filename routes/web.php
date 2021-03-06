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


/*
* This route are used for Public users. Ex: Visitors
*/

Route::group(['namespace' => 'Frontend'], function() {
	Route::get('/', 'HomeController@index');
	Route::get('about', 'HomeController@about');
	Route::get('franchise', 'HomeController@franchise');
	Route::post('franchise', 'FranchiseController@store');
	
	Route::get('privacy-policy', 'HomeController@privacyPolicy');
	Route::get('why-choose-us', 'HomeController@why_choose_us');
	Route::get('what-we-do', 'HomeController@what_we_do');
	Route::get('mbbs-in-bd', 'HomeController@mbbs_in_bd');
	Route::get('courses', 'CoursesController@index');
	Route::get('courses/{course}', 'CoursesController@show')->name('course-details');

	Route::get('course-registration/{course}', 'CourseRegistrationController@create')->name('course-registration');
	Route::post('course-registration', 'CourseRegistrationController@store');

	Route::post('inquries', 'InquriesController@store');
	Route::get('thank-you', 'InquriesController@thankyou');

	// Route::get('products', 'ProductsController@index');
	// Route::get('products/{product}', 'ProductsController@show')->name('product-details');

	// Route::get('events', 'EventsController@index');
	// Route::get('events/{events}', 'EventsController@show')->name('event-details');

	// Route::get('news', 'NewsController@index');
	// Route::get('news/{news}', 'NewsController@show')->name('news-details');

	Route::get('contact', 'ContactsController@index');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'dashboard', 'namespace'=>'Backend', 'middleware'=>['auth']], function() {
	Route::get('/', 'DashboardController@index');
	Route::get('users', 'UserManagementController@index')->name('users');
	Route::get('users/{user}/edit', 'UserManagementController@edit_role')->name('users.edit.role');
	Route::get('users/{user}', 'UserManagementController@show')->name('users.show');
	Route::get('profile', 'ProfileController@show')->name('user.profile');
	Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
	Route::get('profile/settings', 'ProfileController@settings')->name('profile.settings');
	Route::POST('profile/settings/change-password', 'ProfileController@changePassword')->name('profile.settings.pass.change');
	Route::PUT('profile/{user}/update', 'ProfileController@update')->name('profile.update');
	Route::PUT('users/{user}', 'UserManagementController@update_role')->name('users.update.role');
	Route::DELETE('users/{user}', 'UserManagementController@destroy')->name('users.destroy');	
	Route::resource('pages','PageController');
	Route::resource('services','ServiceController');
	Route::resource('products','ProductController');
	Route::resource('images','ImageController');
	Route::resource('brands','BrandsController');
	//Route::resource('students','StudentController');
	Route::resource('project-types','ProjectTypeController');
	Route::get('services/{service}/create-success-case','ProjectTypeController@create_success_case')->name('create-success-case');
	// project type project
	Route::get('project-types/{project_type}/projects','ProjectTypeController@projects')->name('project-types.projects');
	Route::get('project-types/{project_type}/projects/create','ProjectController@create')->name('project-type.projects.create');
	Route::post('project-types/{project_type}/projects','ProjectController@store')->name('project-type.projects.store');
	Route::get('project-types/{project_type}/projects/{project}/edit','ProjectController@edit')->name('project-type.projects.edit');	
	Route::PUT('project-types/{project_type}/projects/{project}','ProjectController@update')->name('project-type.projects.update');	
	Route::get('successful-cases', 'DashboardController@successful_cases');
	//training
	Route::resource('categories','CategoryController');
	Route::resource('courses','CourseController');
	Route::resource('student-infos','StudentInfosController');
	Route::get('student-infos/{student_info}/registration','StudentRegistrationController@create_student')->name('create.student');
	Route::resource('students','StudentRegistrationController');
	Route::get('students/{user}/courses','StudentCourseController@index')->name('student.courses.index');
	Route::get('students/{user}/courses/create','StudentCourseController@create')->name('student.courses.create');
	Route::get('students/{user}/courses/{corse}/edit','StudentCourseController@edit')->name('student.courses.edit');
	Route::post('students/{user}/courses','StudentCourseController@store')->name('student.courses.store');
	Route::post('students/deactive-a-course','StudentCourseController@detach')->name('deactive.course');
	Route::get('edit-course-fee','StudentCourseFeeController@edit')->name('edit.course.fee');
	Route::put('edit-course-fee','StudentCourseFeeController@update')->name('update.course.fee');

	
	//end training
	//training
	Route::resource('manage-orders','ManageOrderController');
	Route::resource('courses','CourseController');
	//end training
	//billing
	Route::get('students/{user}/account', 'StudentAccountController@index')->name('student.account');
	Route::get('students/{user}/account/transaction', 'TransactionController@create')->name('student.account.transaction');
	Route::POST('students/{user}/account/transaction', 'TransactionController@store')->name('student.account.transaction.store');
	Route::get('students/{user}/account/transactions', 'TransactionController@index')->name('student.account.transaction.index');

	Route::get('invoice/{student_transaction}', 'InvoiceController@show')->name('invoice');

	//end billing
	Route::get('inquries', 'InquiriesController@index')->name('inquries.index');
	Route::get('inquries/{inquiry}', 'InquiriesController@show')->name('inquries.show');
	Route::post('inquries/{inquiry}/change-status', 'InquiriesController@change_status')->name('inquries.change.status');
	Route::post('inquries/filter', 'InquiriesController@filter')->name('inquries.filter');
	Route::DELETE('inquries/{inquiry}', 'InquiriesController@destroy')->name('inquries.destroy');

	Route::get('product-inquiryes', 'InquiryController@productInquries');

	Route::get('franchise', 'FranchiseController@index')->name('franchise.index');
	Route::get('franchise/{franchise}', 'FranchiseController@show')->name('franchise.show');
	Route::post('franchise/{franchise}/change-status', 'FranchiseController@change_status')->name('franchise.change.status');
	Route::post('franchise/filter', 'FranchiseController@filter')->name('franchise.filter');
	Route::DELETE('franchise/{franchise}', 'FranchiseController@destroy')->name('franchise.destroy');


	// Feb-16-2020
	Route::resource('college','CollegesController');
	Route::resource('colleges/{college}/images','CollegeImagesController');
});
