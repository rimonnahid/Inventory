@extends('layouts.app')
@section('title',$employee->name.' | Employee')
@section('content')
<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-md-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Profile By {{ $employee->name }}</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-fluid" src="{{ asset('storage/app/public/'.$employee->image) }}" width="100%" height="auto">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{ $employee->name }}</strong></h4>
                        <p><i class="fa fa-map-marker"></i> {{ $employee->address }}</p>
                        <h5>
                            More Information
                        </h5>
                        <table>
                        	<tr>
                        		<td>Email</td>
                        		<td>: {{ $employee->email }}</td>
                        	</tr>
                        	<tr>
                        		<td>Phone</td>
                        		<td>: {{ $employee->phone }}</td>
                        	</tr>
                        	<tr>
                        		<td>NID No</td>
                        		<td>: {{ $employee->nid }}</td>
                        	</tr>
                        	<tr>
                        		<td>City</td>
                        		<td>:  
                        			{{ $employee->city }}</td>
                        	</tr>
                            <tr>
                                <td>Salary</td>
                                <td>:  
                                    {{ $employee->salary }}</td>
                            </tr>
                        </table>

                        <div class="row m-t-lg">
                        	<div class="col-md-12">
                        		<strong>Vacation status :</strong>
                        	</div>
                            <div class="col-md-4">
                                <span class="">Monthly</span>
                                <h5><strong>{{ $employee->vacation }}</strong></h5>
                            </div>
                            <div class="col-md-4">
                                <span>Pending</span>
                                <h5><strong>{{ $employee->vacation }}</strong></h5>
                            </div>
                            <div class="col-md-4">
                                <span class="">Total</span>
                                <h5><strong>{{ $employee->vacation }}</strong></h5>
                            </div>
                        </div>
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Activites</h5>
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
                    @foreach($salary as $sal)
                    <div class="feed-activity-list">
                        <div class="feed-element">
                            <div class="media-body ">
                                <small class="float-right">{{ $sal->created_at->diffForHumans() }}</small>
                                <strong>{{ $sal->employee->name }}</strong> Get  <strong>{{ $sal->advance_salary }}</strong> tk {{ $sal->status }}. <br>
                                <small class="text-muted">{{ $sal->created_at }}</small>
                                <div class="float-right">
                                    <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection