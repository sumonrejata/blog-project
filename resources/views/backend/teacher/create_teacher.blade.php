
@extends('backend/layout/admin_master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Teacher</h3>
            <a href="{{ url('allteteacher') }}" class="btn btn-success">Back to Teacher</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertteteacher' }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Teacher Name:</label>
                  <input type="text" name="tea_name" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Teacher Designation:</label>
                  <input type="text" name="tea_designation" class="form-control">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Description :</label>
                  <input type="text" name="tea_description" class="form-control">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="tea_image" class="form-control" placeholder="Image">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Facebook :</label>
                  <input type="text" name="facebook" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Facebook Link :</label>
                  <input type="text" name="fblink" class="form-control">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Youtube :</label>
                  <input type="text" name="youtube" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Youtube Link :</label>
                  <input type="text" name="youlink" class="form-control">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Twitter :</label>
                  <input type="text" name="twitter" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Twitter Link:</label>
                  <input type="text" name="twilink" class="form-control">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Google :</label>
                  <input type="text" name="google" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Google Link:</label>
                  <input type="text" name="goolink" class="form-control">
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



