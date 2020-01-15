<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class StudentController extends Controller
{
  //Student Dashboard Method
  public function student_dashboard() {
      return view('student.dashboard');
  }

  //Student setting Method
   public function studentsetting() {
        $student_id=Session::get('student_id');
       $student_details_view = DB::table('student_tbl')
              ->select('*')
              ->where('student_id', $student_id)
              ->first();
      $manage_student_details = view('student.student_setting')
              ->with('studentdetailsview',$student_details_view);
      return view('student_layout')
      ->with('student_setting',$manage_student_details);

      //return view('student.student_setting');
  }

  //Student Logout part
      public function student_logout() {
          Session::put('student_name',null);
          Session::put('student_id',null);

          return Redirect::to('/');
      }



      //LoginDashboard for Student
      public function student_login_dashboard(Request $request) {
         //return view('admin.dashboard');
           $email = $request->student_email;
          $password =$request->student_password;
          $result = DB::table('student_tbl')
                  ->where('student_email',$email)
                  ->where('student_password',$password)
                  ->first();


          if ($result) {
              Session::put('student_email',$result->student_email);
              Session::put('student_id',$result->student_id);
              return Redirect::to('/student_dashboard');
          }
          else{
              Session::put('exception','Email or Password Invalid');
              return Redirect::to('/');
          }

      }
      //view book
      public function viewbook() {

          $allbook_info=DB::table('book_tb1')
                  ->get();
          $manage_book=view('student.view_book')
                  ->with('allbook_info',$allbook_info);
          return view('student_layout')
          ->with('student.view_book',$manage_book);

        }
}
