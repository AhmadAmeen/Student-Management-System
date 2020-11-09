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

Route::get('/', 'AdminController@adminlogin');
Route::get('/adminlogin', 'AdminController@adminlogin');
Route::get('/getlogout', 'AdminController@adminlogout');
Route::post('/islogin', 'AdminController@adminloggedin');
Route::get('/studentregistrationform', 'StudentController@create');
Route::post('/studentstore', 'StudentController@store');
Route::get('/showstudents', 'StudentController@show');
Route::get('/editingstudent/{id}', 'StudentController@edit');
Route::post('/updatestudent/{id}', 'StudentController@update');
Route::get('/deletestudent/{id}', 'StudentController@delete');
//school branch route
Route::get('/addbranch', 'BranchController@create');
Route::post('/addschoolbranch', 'BranchController@add');
Route::get('/showbranch', 'BranchController@show');
Route::get('/editbranch/{id}', 'BranchController@edit');
Route::post('/deletebranch/{id}', 'BranchController@delete');
Route::post('/updatebranch/{id}', 'BranchController@update');
Route::get('/editbranch/{id}', 'BranchController@edit');
Route::get('classinfo/{class}', 'ClassInfoController@classinfo');
//discipline route
Route::view('adddiscipline', 'adddiscipline');
Route::post('addnewdiscipline', 'DisciplineController@addnewdiscipline');
Route::get('viewdisciplines', 'DisciplineController@viewdisciplines');
Route::get('deletediscipline/{id}', 'DisciplineController@deletediscipline');
//course Route
Route::get('addcourse', 'CourseController@create');
Route::post('addnewcourse', 'CourseController@addnewcourse');
Route::get('viewcourses', 'CourseController@show');
Route::get('editingcourse/{id}', 'CourseController@edit');
Route::get('deletecourse/{id}', 'CourseController@delete');
//teacher route
Route::get('addteacher', 'TeacherController@create');
Route::post('addnewteacher', 'TeacherController@store');
Route::get('viewteachers', 'TeacherController@show');
Route::get('editingteacher/{id}', 'TeacherController@edit');
Route::get('deleteteacher/{id}', 'TeacherController@delete');
//classes details
Route::get('allclassesdetails', 'ClassInfoController@allClassesDetails');
Route::get('getseachedstudentsclassesinfo', 'ClassInfoController@getseachedstudentsclassesinfo');
Route::get('getseachedteachersclassesinfo', 'ClassInfoController@getseachedteachersclassesinfo');
//chat
Route::get('adminschat', 'AdminController@adminschat');
Route::get('chatwithadmin/{sender_id}/{rec_id}', 'AdminController@chatwithadmin');
Route::post('sending', 'AdminController@sendingmsg');

Route::resource('/userData','UserDataController');
//insert data
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@s');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
