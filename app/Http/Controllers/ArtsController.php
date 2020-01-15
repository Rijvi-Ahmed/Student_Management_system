<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ArtsController extends Controller
{
  public function arts() {

      $artsBook_info=DB::table('book_tb1')
              ->where(['book_type'=>3])
              ->get();
      $manage_book=view('admin.arts')
              ->with('artsBook_info',$artsBook_info);
      return view('layout')
      ->with('arts',$manage_book);

      return view('admin.arts');
  }
}
