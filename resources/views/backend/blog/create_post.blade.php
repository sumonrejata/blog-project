@extends('backend/layout/admin_master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Post</h3>
            <a href="{{ url('allpost') }}" class="btn btn-success">Back to All Post</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertpost' }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Title:</label>
                  <input type="text" name="title" class="form-control" value="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Description:</label>
                  <input type="text" name="desctiption" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="image" class="form-control" placeholder="Image">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Category</label>
                  <select name="cat_id" id="pet-select">
                    <option value="">--Select Category--</option>
                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                    @endforeach
                    
                    
                </select>
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



