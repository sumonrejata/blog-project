@extends('backend/layout/admin_master');
@section('content')
    

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Footer Address</h3>
            <a href="{{ url('showaddress') }}" class="btn btn-success">Back to Address</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertaddress' }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">

                <div class="form-group">
                  <label for="email">Icon :</label>
                  <input type="text" name="icon" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label for="email">Address :</label>
                  <textarea class="form-control" id="summernote" name="address"></textarea>
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