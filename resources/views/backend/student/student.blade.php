@extends('backend/layout/admin_master');
@section('content')
    <!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Dashboard</h4>
        <ul class="db-breadcrumb-list">
            <li>
                <a href="#"><i class="fa fa-home"></i>Home</a>
            </li>
            <li>Dashboard</li>
        </ul>
    </div>
    <!-- End breadcum -->

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>All Student Info</h3>
                <a href="{{ url('studentcreate') }}" class="btn btn-success">Back to Student</a>
              </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <div class="title-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>SI No</th>
                                            <th>Name</th>
                                            <th>Roll No</th>
                                            <th>Department</th>
                                            <th>Image</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($studentlist as $list)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $list->st_name }}</td>
                                            <td>{{ $list->st_roll }}</td>
                                            <td>{{ $list->st_depertment }}</td>
                                            <td>
                                        <img src="{{ asset($list->st_image) }}"
                                        style="width: 135px;height: 75px;margin: 0 auto;display: flex;"
                                        alt="">
                                            </td>
                                            <td>
                                                <a href="{{ url('edit',$list->id) }}" class="btn btn-success">Edit</a>
                                                <a href="{{ url('delete',$list->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">Footer</div>
      </div>
@endsection