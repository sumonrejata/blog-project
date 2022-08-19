@extends('backend/layout/admin_master')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Achivement</h3>
            <a href="{{ url('allachivement') }}" class="btn btn-success">Back to Courses</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertachive' }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Achivement Title:</label>
                  <input type="text" name="achive_title" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Counter No:</label>
                  <input type="text" name="achive_cou_no" class="form-control">
                </div>


                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="achive_image" class="form-control" placeholder="Image">

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


