<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddbookController extends Controller
{

      public function addbook() {
          return view('admin.add_book');
      }

      public function savebook(Request $request) {

          $data = array();
          $data['book_name'] = $request->book_name;
          $data['book_details'] = $request->book_details;
          $data['book_location'] = $request->book_location;
          $data['book_type'] = $request->book_type;
          $image = $request->file('book_img');
          if ($image) {
              $image_name = str_random(20);
              $ext = strtolower($image->getClientOriginalExtension());
              $image_full_name = $image_name.'.'.$ext;
              $upload_path = 'image/';
              $image_url = $upload_path.$image_full_name;
              $success = $image->move($upload_path,$image_full_name);

              if ($success) {
                  $data['book_img'] = $image_url;

                  DB::table('book_tb1')->insert($data);
                  Session::put('message','Book added successfully!!');
                  return Redirect::to('/addbook');
              }
          }
          $data['image'] = $image_url;
           DB::table('book_tb1')->insert($data);
                  Session::put('message','Book added successfully!!');
                  return Redirect::to('/addbook');

                   DB::table('book_tb1')->insert($data);
                  Session::put('message','Book added successfully!!');
                  return Redirect::to('/addbook');

      }
}
