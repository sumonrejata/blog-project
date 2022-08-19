@extends('backend/layout/admin_master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Edit Courses</h3>
            <a href="{{ url('allabout') }}" class="btn btn-success">Back to Courses</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertabout' }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Title:</label>
                  <input type="text" name="abtitle" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Description :</label>
                  <input type="text" name="description" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Button Text :</label>
                  <input type="text" name="btntext" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Button Url :</label>
                  <input type="text" name="btnurl" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="image" class="form-control" placeholder="Image">
                </div> 

                <div class="form-group col-sm-6">
                  <label for="email">Video Image:</label>
                  <input type="file" name="video_image" class="form-control" placeholder="Image">
                </div> 
                <div class="form-group col-sm-6">
                  <label for="email">Video Url:</label>
                  <input type="text" name="video_url" class="form-control" placeholder="Image">
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