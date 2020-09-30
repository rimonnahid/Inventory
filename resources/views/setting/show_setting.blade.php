@extends('layouts.app')
@section('title','Setting')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
 	<div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Setting Equipment</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
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
                                <th> Name </th>
                                <td>{{ $setting->name }}</td>
                            </tr>
                            <tr>
                                <th> Phone </th>
                                <td>{{ $setting->phone }}</td>
                            </tr>
                            <tr>
                                <th> Email </th>
                                <td>{{ $setting->email }}</td>
                            </tr>
                            <tr>
                                <th> Address</th>
                                <td>{{ $setting->address }}</td>
                            </tr>
                            <tr>
                                <th> Mobile </th>
                                <td>{{ $setting->mobile }}</td>
                            </tr>
                            <tr>
                                <th> City </th>
                                <td>{{ $setting->city }}</td>
                            </tr>
                            <tr>
                                <th> Country </th>
                                <td>{{ $setting->country }}</td>
                            </tr>
                            <tr>
                                <th> Zip-code </th>
                                <td>{{ $setting->zipcode }}</td>
                            </tr>

                            <tr>
                                <th> Logo </th>
                                <td>
                                    @if($setting->logo)
                                    <img src="{{ asset('storage/app/public/'.$setting->logo) }}"  height="30px" width="40px">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Action</th>
                                <td>
                                    <a href="{{ url('/edit_setting/'.$setting->id) }}" class="btn btn-success btn-xs">Edit</a>{{-- 
                                    <a href="{{ url('/delete_setting/'.$setting->id) }}" class="btn btn-danger btn-xs" id="delete">Delete</a> --}}
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
