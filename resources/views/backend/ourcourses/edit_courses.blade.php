@extends('backend/layout/admin_master')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h3>Edit Courses</h3>
            <a href="{{ url('allourcourses') }}" class="btn btn-success">Back to Courses</a>
          </div>
        </div>
        <div class="card-body">
            
            <form action="{{ url('updatecourses') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="EditId" value="{{ $ourcourses->id }}">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="email">Admission:</label>
                  <input type="text" name="admission" class="form-control" value="{{ $ourcourses->admission }}">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">Courses Title:</label>
                  <input type="text" name="courses_title" class="form-control" value="{{ $ourcourses->title }}">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Description :</label>
                  <input type="text" name="description" class="form-control" value="{{ $ourcourses->description }}">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Cradit :</label>
                  <input type="text" name="cradit" class="form-control" value="{{ $ourcourses->cradit }}">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Duration :</label>
                  <input type="text" name="duration" class="form-control" value="{{ $ourcourses->duration }}">
                </div>

                <div class="form-group col-sm-6">
                  <label for="email">Image:</label>
                  <input type="file" name="image" class="form-control" placeholder="Image">
                </div>
                
                <img src="{{ asset( $ourcourses->image) }}" alt="" style="width: 250px;height:150px;">  
                           
              </div>
              <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                
              </form>
        </div>
        <div class="card-footer">Footer</div>
      </div>
   
</div>

  @endsection

