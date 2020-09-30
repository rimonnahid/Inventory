@extends('layouts.app')
@section('title','All Attendence')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 	
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>All Attendence </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th width="15%">SL</th>
                    <th>Date </th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($attendences as $attendence)
                <tr class="gradeX">
                    <td>{{ $sl++ }}</td>
                    <td>{{ $attendence->date }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ url('/view_attendence/'.$attendence->date) }}" class="btn btn-primary btn-xs">View</a>
                            <a href="{{ url('/edit_attendence/'.$attendence->date) }}" class="btn btn-success btn-xs">Edit</a>
                            <a href="{{ url('/delete_attendence/'.$attendence->date) }}" class="btn btn-danger btn-xs" id="delete">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th width="15%">SL</th>
                    <th>Name </th>
                    <th>Action</th>
                </tr>
                </tfoot>
                </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
