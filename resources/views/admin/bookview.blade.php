@extends('layout')
@php
function convert_department($value){
      $values = [
               1=>'Science',
               2=>'Commerce',
               3=>'Arts',


      ];
      return $values[$value];
}
@endphp

@section('content')

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Information</h2>
                  <img src="{{URL::to($bookdetailsview->book_img)}}" alt="">
                  <p class="name">{{$bookdetailsview->book_name}}</p>


                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">

                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of book are given below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Description:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$bookdetailsview->book_details}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Book Type:</i>
                      <span style="font-family: vernada; font-size: 20px">{{convert_department($bookdetailsview->book_type)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Location in Row:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$bookdetailsview->book_location}}</span>
                    </a>



                  </div>
                </div>
              </div>
            </div>

          </div>

@endsection
