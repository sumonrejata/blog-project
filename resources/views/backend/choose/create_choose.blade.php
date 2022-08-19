@extends('backend/layout/admin_master')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Add New Choose</h3>
            <a href="{{ url('allchoose') }}" class="btn btn-success">Back to Choose</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertchoose' }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Choose Title:</label>
                  <input type="text" name="choo_title" class="form-control" value="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Choose Description:</label>
                  <input type="text" name="choo_desc" class="form-control" value="">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="choo_image" class="form-control" placeholder="Image">
                </div>
              
                <div class="form-group col-sm-6">
                  <label for="cars">Select Background Color:</label>

                  <select id="cars">
                    <option value="yellow">Yellow</option>
                    <option value="light-blue">light-blue</option>
                    <option value="vw">VW</option>
                    <option value="audi" selected>Audi</option>
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