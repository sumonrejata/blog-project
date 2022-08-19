@extends('backend/layout/admin_master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Edit Courses</h3>
            <a href="{{ url('allevent') }}" class="btn btn-success">Back to Courses</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertevent' }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Event Title:</label>
                  <input type="text" name="event_title" class="form-control" value="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Event Description :</label>
                  <input type="text" name="event_desc" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Event Date :</label>
                  <input type="text" name="event_date" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Event Month :</label>
                  <input type="text" name="event_month" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Event Location :</label>
                  <input type="text" name="event_locat" class="form-control" value="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Event Time :</label>
                  <input type="text" name="event_time" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="event_image" class="form-control" placeholder="Image">
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