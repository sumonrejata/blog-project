
@extends('backend/layout/admin_master');
@section('content')
    

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Footer Description</h3>
            <a href="{{ url('allfooterdesc') }}" class="btn btn-success">Back to Description</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ 'insertaboutdesc' }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">

                <div class="form-group">
                  <label for="email">Description :</label>
                  <textarea id="summernote"></textarea>
                  {{-- <input type="text" name="description" class="form-control" value=""> --}}
                  {{-- <textarea class="form-control" id="summernote" name="description"></textarea> --}}
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