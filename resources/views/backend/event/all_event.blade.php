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
                <h3>All Event Info</h3>
                <a href="{{ url('createevent') }}" class="btn btn-success">Back to Event</a>
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
                                            <th>Event Name</th>
                                            <th>Designation</th>
                                            <th>Event Date</th>
                                            <th>Month</th>
                                            <th>Locaiton</th>
                                            <th>Time</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach ( $event as $list)    
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $list->title }}</td>
                                            <td>{{ $list->description }}</td>
                                            <td>{{ $list->event_date }}</td>
                                            <td>{{ $list->event_month }}</td>
                                            <td>{{ $list->eventlocat }}</td>
                                            <td>{{ $list->event_time }}</td>
                                            <td>
                                                <img src="{{ asset($list->event_image) }}"
                                                style="width: 135px;height: 75px;margin: 0 auto;display: flex;"
                                                alt="">
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-success">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
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
