@extends('backend/layout/admin_master')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Category</h3>
            <a href="{{ url('allcategory') }}" class="btn btn-success">Back to Category</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertcategory' }}" method="post" enctype="multipart/form-data">
           @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="category_name">Category Name :</label>
                  <input type="text" name="category_name" class="form-control" value="">
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



