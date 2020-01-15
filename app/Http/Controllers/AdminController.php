<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{
//admin dashboard.........
    public function admin_dashboard() {
        return view('admin.dashboard');
    }



    //view Admin profile
     public function viewprofile() {
           $admin_id=Session::get('admin_id');
         $admin_details_view = DB::table('admin_tbl')
                ->select('*')
                ->where('admin_id', $admin_id)
                ->first();
        $manage_admin_details = view('admin.view')
                ->with('admindetailsview',$admin_details_view);
        return view('layout')
        ->with('view',$manage_admin_details);


    }

    //Admin setting Method
     public function setting() {
         $admin_id=Session::get('admin_id');
         $admin_details_view = DB::table('admin_tbl')
                ->select('*')
                ->where('admin_id', $admin_id)
                ->first();
        $manage_admin_details = view('admin.setting')
                ->with('admindetailsview',$admin_details_view);
        return view('layout')
        ->with('setting',$manage_admin_details);


    }


        //Admin Own Update Method
    public function adminownupdate(Request $request) {
        $admin_id=Session::get('admin_id');
        $data=array();
        $data['admin_phone']=$request->admin_phone;
        $data['admin_email']=$request->admin_email;
        $data['admin_password']=$request->admin_password;

        DB::table('admin_tbl')
                ->where('admin_id',$admin_id)
                ->update($data);


        return Redirect::to('/viewprofile');
    }


//Admin Logout part
    public function logout() {
        Session::put('admin_name',null);
        Session::put('admin_id',null);

        return Redirect::to('/admin');
    }


    //LoginDashboard for Admin
    public function login_dashboard(Request $request) {

         $email = $request->admin_email;
        $password =$request->admin_password;
        $result = DB::table('admin_tbl')
                ->where('admin_email',$email)
                ->where('admin_password',$password)
                ->first();



        if ($result) {
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/admin_dashboard');
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/admin');
        }

    }


}
