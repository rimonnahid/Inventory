@extends('layouts.app')
@section('title','Monthly Expense')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 	<div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Current Month </span>
                    <h5>Monthly Expense</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $monthlys->sum('ammount') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Monthly Expense Details (<span class="text-danger">{{ date('F') }}</span>) </h5>
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
                        @foreach($monthlys as $monthly)
                        <tr class="gradeX">
                            <td>{{ $monthly->id }}</td>
                            <td>{{ $monthly->details }}</td>
                            <td>{{ $monthly->ammount }}</td>
                            <td>
                                <a href="{{ url('/edit_expense/'.$monthly->id) }}" class="btn btn-success btn-xs">Edit</a>
                                <a href="{{ url('/delete_expense/'.$monthly->id) }}" class="btn btn-danger btn-xs" id="delete">Delete</a>
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

