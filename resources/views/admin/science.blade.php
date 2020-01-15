@extends('layout')
@section('content')

  <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Book_Name</th>
                        <th>Book_Image</th>
                        <th>Book_Location</th>
                        <th>Book_type</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($scienceBook_info as $show_info)
                      <tr>
                          <td>{{$show_info->book_name}}</td>
                          <td><img src="{{URL::to($show_info->book_img)}}" height="80" width="100" style="border-radius: 50%;"></td>

                          <td>

                              @if ($show_info->book_location == 1)
                              <span class="label-success">{{('1st Row')}}</span>
                              @elseif ($show_info->book_location == 2)
                              <span class="label-primary">{{('2nd Row')}}</span>
                              @elseif ($show_info->book_location == 3)
                              <span class="label-warning">{{('3rd Row')}}</span>
                              @elseif ($show_info->book_location == 4)
                              <span class="label-info">{{('4th Row')}}</span>
                              @elseif ($show_info->book_location == 5)
                              <span class="label-info">{{('5th Row')}}</span>
                              @else
                              <span class="label-important">{{('Not defined')}}</span>
                              @endif

                          </td>
                          <td>

                              @if ($show_info->book_type == 1)
                              <span class="label-success">{{('Science')}}</span>
                              @else
                              <span class="label-important">{{('Not defined')}}</span>
                              @endif

                          </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



@endsection
