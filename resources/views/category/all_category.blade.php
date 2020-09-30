@extends('layouts.app')
@section('title','All Category')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 	
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Basic Data Tables example for Product Categories </h5>
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
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                <tr class="gradeX">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->cate_name }}</td>
                    <td>
                        <a href="{{ url('/edit_category/'.$category->id) }}" class="btn btn-success btn-xs">Edit</a>
                        <a href="{{ url('/delete_category/'.$category->id) }}" class="btn btn-danger btn-xs" id="delete">Delete</a>
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
