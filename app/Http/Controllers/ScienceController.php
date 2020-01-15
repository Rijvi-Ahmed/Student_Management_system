<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ScienceController extends Controller
{
  public function science() {

      $scienceBook_info=DB::table('book_tb1')
              ->where(['book_type'=>1])
              ->get();
      $manage_book=view('admin.science')
              ->with('scienceBook_info',$scienceBook_info);
      return view('layout')
      ->with('science',$manage_book);

      return view('admin.science');
  }
}
