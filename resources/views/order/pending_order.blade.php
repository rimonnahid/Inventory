@extends('layouts.app')
@section('title',"Pending Order's")

@section('title','Add Product')

@section('content')
    
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Basic Form</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a>Pending Order</a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Basic Data Table for pending orders</h5>
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
                                <th>Customer Name </th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Total Ammount</th>
                                <th>Payment</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($orders as $order)
                            <tbody>
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->total_product }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td><span class="badge badge-info">{{ $order->order_status }}</span></td>
                                <td><a href="{{ url('order_details/'.$order->order_id) }}" class="btn btn-success btn-xs">View</a></td>
                            </tr>
                            </tbody>
                            @endforeach
                            <tfoot>
                            <tr>
                                <th width="15%">SL</th>
                                <th>Customer Name </th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Total Ammount</th>
                                <th>Payment</th>
                                <th>Order Status</th>
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