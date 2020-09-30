@extends('layouts.app')
@section('title','All Employee')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 	
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Basic Data Tables example with responsive plugin</h5>
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
                <table class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                    <th width="15%">SL</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Sallary</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($employees as $employee)
                <tr class="gradeX">
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        @if($employee->image)
                        <img src="{{ asset('storage/app/public/'.$employee->image) }}" height="30px" width="40px">
                        @endif
                    </td>
                    <td>{{ $employee->sallary }}</td>
                    <td>
                        <a href="{{ url('/employee_profile/'.$employee->id) }}" class="btn btn-success btn-xs">View</a>
                        <a href="{{ url('/edit_employee/'.$employee->id) }}" class="btn btn-info btn-xs">Edit</a>
                        <a href="{{ url('/delete_employee/'.$employee->id) }}" class="btn btn-danger btn-xs" id="delete">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th width="15%">SL</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Sallary</th>
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
