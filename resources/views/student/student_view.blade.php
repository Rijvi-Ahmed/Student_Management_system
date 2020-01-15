@extends('student_layout')
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
                  <img src="{{URL::to($studentdetailsview->student_image)}}" alt="">
                  <p class="name">{{strtoupper($studentdetailsview->student_name)}}</p>
                  <p class="designation">-  {{$studentdetailsview->student_roll}}  -</p>
                  <a class="email" href="#">{{$studentdetailsview->student_email}}</a>
                  <a class="number" href="#">{{$studentdetailsview->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">

                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this student are given below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Fathers Name:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$studentdetailsview->student_fathersname}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Mothers Name:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$studentdetailsview->student_mothersname}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Student Address:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$studentdetailsview->student_address}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Student Department:</i>
                      <span style="font-family: vernada; font-size: 20px">{{convert_department($studentdetailsview->student_department)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Student Admission year:</i>
                      <span style="font-family: vernada; font-size: 20px">{{$studentdetailsview->student_admissionyear}}</span>
                    </a>

                  </div>
                </div>
              </div>
            </div>

          </div>

@endsection
