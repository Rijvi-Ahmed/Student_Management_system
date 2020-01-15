<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommerceController extends Controller
{
  
    public function commerce() {

        $commerceBook_info=DB::table('book_tb1')
                ->where(['book_type'=>2])
                ->get();
        $manage_book=view('admin.commerce')
                ->with('commerceBook_info',$commerceBook_info);
        return view('layout')
        ->with('commerce',$manage_book);

        return view('admin.commerce');
    }
}
