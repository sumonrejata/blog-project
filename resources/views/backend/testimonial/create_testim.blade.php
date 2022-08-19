@extends('backend/layout/admin_master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Testimonial</h3>
            <a href="{{ url('alltestimonila') }}" class="btn btn-success">Back to Testimonial</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'inserttestimonila' }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Title :</label>
                  <input type="text" name="testi_title" class="form-control" value="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Department:</label>
                  <input type="text" name="department" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Description :</label>
                  <input type="text" name="description" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="testi_image" class="form-control" placeholder="Image">
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