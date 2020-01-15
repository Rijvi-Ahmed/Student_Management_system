<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllbookController extends Controller
{
    public function allbook() {

        $allbook_info=DB::table('book_tb1')
                ->get();
        $manage_book=view('admin.allbook')
                ->with('allbook_info',$allbook_info);
        return view('layout')
        ->with('allbook',$manage_book);

        //return view('admin.allstudent');
    }

    //Student Delete Method
    public function bookdelete($book_id) {

        DB::table('book_tb1')
                ->where('book_id',$book_id)
                ->delete();
        return Redirect::to('/allbook');
    }
    //Student information view  Method
    public function bookview($book_id) {

        $book_details_view = DB::table('book_tb1')
                ->select('*')
                ->where('book_id', $book_id)
                ->first();
        $manage_book_details = view('admin.bookview')
                ->with('bookdetailsview',$book_details_view);
        return view('layout')
        ->with('bookview',$manage_book_details);



    }

    //Student Information Edit Method
     public function bookedit($book_id) {

        $book_details_view = DB::table('book_tb1')
                ->select('*')
                ->where('book_id', $book_id)
                ->first();
        $manage_book_details = view('admin.bookedit')
                ->with('bookdetailsview',$book_details_view);
        return view('layout')
        ->with('bookedit',$manage_book_details);
    }

//update book data........
    public function bookupdate(Request $request,$book_id) {
        $data=array();
        $data['book_name']=$request->book_name;
        $data['book_details']=$request->book_details;
        $data['book_img']=$request->book_img;
        $data['book_location']=$request->book_location;
        $data['book_type']=$request->book_type;


        DB::table('book_tb1')
                ->where('book_id',$book_id)
                ->update($data);

        Session::put('message','Book Update Successfully!!');
        return Redirect::to('/allbook');
    }
    //view book
    public function viewbook() {

        $allbook_info=DB::table('book_tb1')
                ->get();
        $manage_book=view('student.view_book')
                ->with('allbook_info',$allbook_info);
        return view('layout')
        ->with('student.view_book',$manage_book);

      }
}
