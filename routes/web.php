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
//admin login
Route::get('/admin', function () {
    return view('admin.admin_login');
});
//Admin logout
Route::get('/logout','AdminController@logout');
//admin login...
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
//Admin profile
Route::get('/viewprofile','AdminController@viewprofile');
//Admin setting And Update
Route::get('/setting','AdminController@setting');
Route::post('/admin_own_update','AdminController@adminownupdate');
//addstudent
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@savestudent');




//student login
Route::get('/', function () {
    return view('student_login');
});
//Student logout
Route::get('/student_logout','StudentController@student_logout');
//Student login...
Route::post('/studentlogin','StudentController@student_login_dashboard');
Route::get('/student_dashboard','StudentController@student_dashboard');
//Student Profile
Route::get('/student_profile','AllstudentsController@studentprofile');
//Student setting
Route::get('/student_setting','StudentController@studentsetting');
//Student own update
Route::post('/student_own_update','AllstudentsController@studentownupdate');
//view book
Route::get('/view_book','StudentController@viewbook');




//viewstudent
Route::get('/student_view/{student_id}','AllstudentsController@studentview');

//editstudent
Route::get('/student_edit/{student_id}','AllstudentsController@studentedit');

//updatestudent
Route::post('/update_student/{student_id}','AllstudentsController@studentupdate');

//Student own update
Route::post('/student_own_update','AllstudentsController@studentownupdate');

//deletestudent
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');

//allstudent
Route::get('/allstudent','AllstudentsController@allstudent');



//add book
Route::get('/addbook','AddbookController@addbook');
Route::post('/save_book','AddbookController@savebook');

//all book
Route::get('/allbook','AllbookController@allbook');

//science
Route::get('/science','ScienceController@science');

//commerce
Route::get('/commerce','CommerceController@commerce');

//arts
Route::get('/arts','ArtsController@arts');

//viewbook
Route::get('/book_view/{book_id}','AllbookController@bookview');

//editbook
Route::get('/book_edit/{book_id}','AllbookController@bookedit');

//updatebook
Route::post('/update_book/{book_id}','AllbookController@bookupdate');

//delete book
Route::get('/book_delete/{book_id}','AllbookController@bookdelete');
