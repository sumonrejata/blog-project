@extends('backend/layout/admin_master')
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
                <h3>All About Info</h3>
                <a href="{{ url('createabout') }}" class="btn btn-success">Back to About</a>
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
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>     
                                        <tr>
                                            <td>1</td>
                                            <td>Tanjim</td>
                                            <td>CEO</td>
                                            <td>Software</td>
                                            <td>
                                                <img src=""
                                                style="width: 135px;height: 75px;margin: 0 auto;display: flex;"
                                                alt="">
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-success">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                               
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
