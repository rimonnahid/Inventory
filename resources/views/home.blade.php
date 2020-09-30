@extends('layouts.app')
@section('title',' Dashboard')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Admin</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($admins) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Employee</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($employee) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Active</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Customer</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($customer) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Active</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Supplier</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($supplier) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Active </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Products</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($products) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Orders</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($orders) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Pending Orders</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($pandingorders) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Shipped Orders</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($shippedorders) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Total Invest</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $products->sum('buying_price') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total current</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Target</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $products->sum('selling_price') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Benefit Target</h5>
                </div>
                @php
                $buy = $products->sum('buying_price');
                $sell = $products->sum('selling_price');
                $main = $sell - $buy;
                @endphp
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $main }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Today </span>
                    <h5>Expense(tk)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $expensetoday->sum('ammount') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Order's(tk)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">120500</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">New </span>
                    <h5>Order's(tk)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">66500</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Done </span>
                    <h5>Order's(tk)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">54000</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Today </span>
                    <h5>Attand Em.</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($attendencetoday) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
