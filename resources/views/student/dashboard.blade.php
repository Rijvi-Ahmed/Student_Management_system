@extends('student_layout')
@section('content')

 <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Sudents</h2>
                  @php
                  $student = DB::table('student_tbl')
                                     ->count('student_id');
                  @endphp
                  <p style="font-family: cursive;font-size: 30px;font-weight: bold;text-align: center;">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Books</h2>
                  @php
                  $book = DB::table('book_tb1')
                                     ->count('book_id');
                  @endphp
                  <p style="font-family: cursive;font-size: 30px;font-weight: bold;text-align: center;">{{$book}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>



@endsection
