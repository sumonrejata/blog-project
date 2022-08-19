@extends('backend/layout/admin_master')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Student</h3>
            <a href="{{ url('student') }}" class="btn btn-success">Back to Student</a>
          </div>
        </div>
        <div class="card-body">
        
            <form action="{{ 'studentinsert' }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Student Name:</label>
                  <input type="text" name="st_name" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Student Roll:</label>
                  <input type="text" name="st_roll" class="form-control">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Department:</label>
                  <input type="text" name="st_depertment" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="st_image" class="form-control" placeholder="Image">
                </div>                
              </div>
              <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                
              </form>
        </div>
        <div class="card-footer">Footer</div>
      </div>
   
</div>

  @endsection

