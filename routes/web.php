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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
            
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	
});

//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
		Route::get('dashboard', 'admin\AdminController@index');
		Route::resource('superadmins','admin\SuperadminsController');
    });
});
//Route for Officer 
Route::group(['prefix' => 'officer'], function(){
	Route::group(['middlewere' => ['officer']], function(){
		Route::get('/dashboard', 'officer\OfficerController@index');
		Route::get('/announces', ['as' => 'officer.announce', 'uses' => 'officer\OfficerController@announce_news']);
		Route::get('/show_news', ['as' => 'officer.add_news', 'uses' => 'officer\OfficerController@add_news']);
		// Route::post('/add_news', ['as' => 'officer.store', 'uses' => 'officer\OfficerController@store']);
		Route::get('/add_accounts', ['as' => 'officer.store_account', 'uses' => 'officer\OfficerController@store_account']);
		Route::get('/select_company', ['as' => 'officer.name_list_by_company', 'uses' => 'officer\OfficerController@name_list_by_company']);
		// Route::get('/document', ['as' => 'officer.internship_document', 'uses' => 'officer\OfficerController@internship_document']);
		// Route::get('/stu_status', ['as' => 'officer.student_status', 'uses' => 'officer\OfficerController@student_status']);
		Route::get('/activity_hours', ['as' => 'officer.stu_activity_hours', 'uses' => 'officer\OfficerController@stu_activity_hours']);
		Route::get('/form_status', ['as' => 'officer.form_status', 'uses' => 'officer\StuCompaniesController@form_status']);
		Route::get('/form_activity', ['as' => 'officer.form_activity_hours', 'uses' => 'officer\OfficerController@form_activity_hours']);
		Route::resource('/stu_companies','officer\StuCompaniesController');
		Route::resource('/recruits_news','officer\RecruitsNewsController');
		Route::resource('/register','officer\RegisterController');
		Route::resource('/average_score','officer\AverageScoreController');
		Route::resource('/document','officer\DocController');
		// Route::get('/document/download/{documents_id}','officer\DocController@download')->name('document.download');
		Route::get('document/download/{id}', [
			'uses'  =>  'officer\DocController@download',
			'as'    =>  'document.download'
		]);

		
	});
});

//Route for student 
Route::group(['prefix' => 'student'], function(){
	Route::group(['middlewere' => ['student']], function(){
		Route::resource('student', 'student\StudentController');
		Route::get('dashboard', 'student\StudentController@index');
		Route::get('regulation', ['as' => 'student.show_regulation', 'uses' => 'student\StudentController@show_regulation']);
		Route::get('information', ['as' => 'student.compa_information', 'uses' => 'student\StudentController@compa_information']);
		// Route::get('di', ['as' => 'student.show_diaries', 'uses' => 'student\StudentController@show_diaries']);
		Route::get('wd', ['as' => 'student.show_write_diary', 'uses' => 'student\StudentController@show_write_diary']);
		Route::resource('diariesa', 'student\DiariesController');

	});
});

//Route for teacher 
Route::group(['prefix' => 'teacher'], function(){
	Route::group(['middlewere' => ['teacher']], function(){
		Route::resource('teacher', 'teacher\TeacherController', ['except' => ['show']]);
		Route::get('dashboard', 'teacher\TeacherController@index');
		// Route::get('stu_status', ['as' => 'teacher.student_status', 'uses' => 'teacher\TeacherController@student_status']);
		// Route::get('stu', ['as' => 'stu_status', 'uses' => 'Stu_statusController@index']);
		Route::get('activity_hours', ['as' => 'stu_activity_hours', 'uses' => 'Stu_statusController@stu_activity_hours']);
		Route::resource('stu_status', 'teacher\Stu_sttController');
	});
});

//Route for company 
Route::group(['prefix' => 'company'], function(){
	Route::group(['middlewere' => ['company']], function(){
		Route::resource('company', 'company\CompanyController', ['except' => ['show']]);
		Route::get('dashboard', 'company\CompanyController@index');
		Route::get('resume', ['as' => 'company.resume', 'uses' => 'company\ResumeController@index']);
		Route::get('diaries',['as' => 'company.diaries', 'uses' => 'company\ApproveController@index']);
		Route::resource('approve', 'company\ApproveController');
	});
});
