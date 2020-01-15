@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add New Book</h2>

                           <p class="alert-success">
                  <?php
                  $exception = Session::get('message');
                  if ($exception) {
                      echo $exception;
                      Session::put('message',null);
                  }
                  ?>
              </p>
                          <form class="forms-sample" method="post" action="{{URL::to('/save_book')}}" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Book Name</label>
                                  <input type="text" class="form-control p-input" name="book_name" aria-describedby="emailHelp" placeholder="Enter book name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Book Description</label>
                                  <textarea class="form-control p-input" name="book_details" rows="10" cols="30"placeholder="Description about book.">

                                  </textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Book Loction</label>
                                  <select class="form-control p-input" name="book_location">
                                      <option value="1">1st Row</option>
                                      <option value="2">2nd Row</option>
                                      <option value="3">3rd Row</option>
                                      <option value="4">4th Row</option>
                                      <option value="5">5th Row</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Book Type</label>
                                  <select class="form-control p-input" name="book_type">
                                      <option value="1">Science</option>
                                      <option value="2">Commerce</option>
                                      <option value="3">Arts</option>

                                  </select>
                              </div>

                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="book_img" id="exampleInputFile2" aria-describedby="fileHelp">

                                  </div>
                              </div>

                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
