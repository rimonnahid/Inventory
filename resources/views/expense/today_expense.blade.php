@extends('layouts.app')
@section('title','Today Expense')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 	<div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">today </span>
                    <h5>Total Expense</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $todays->sum('ammount') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Today Expense Details (<span class="text-danger">{{ date('d/m/y') }}</span>) </h5>
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
                    <th>Details</th>
                    <th>Ammount</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($todays as $today)
                <tr class="gradeX">
                    <td>{{ $today->id }}</td>
                    <td>{{ $today->details }}</td>
                    <td>{{ $today->ammount }}</td>
                    <td>
                        <a href="{{ url('/edit_expense/'.$today->id) }}" class="btn btn-success btn-xs">Edit</a>
                        <a href="{{ url('/delete_expense/'.$today->id) }}" class="btn btn-danger btn-xs" id="delete">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th width="15%">SL</th>
                    <th>Details</th>
                    <th>Ammount</th>
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
