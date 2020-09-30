@extends('layouts.app')
@section('title','All Customer')
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
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th width="15%">SL</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($customers as $customer)
                <tr class="gradeX">
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        @if($customer->image)
                        <img src="{{ asset('storage/app/public/'.$customer->image) }}" height="30px" width="40px">
                        @endif
                    </td>
                    <td>{{ $customer->city }}</td>
                    <td>
                        <a href="{{ url('/edit_customer/'.$customer->id) }}" class="btn btn-success btn-xs">Edit</a>
                        <a href="{{ url('/delete_customer/'.$customer->id) }}" class="btn btn-danger btn-xs" id="delete">Delete</a>
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
