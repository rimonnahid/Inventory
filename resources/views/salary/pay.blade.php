@extends('layouts.app')
@section('title','Add Sallary')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Profile By {{ $employee->name }}</h5>
                </div>
                <div>
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
        <div class="col-lg-8">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>All Element for Pay Sallary</h5>
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
                    

                    <form action="{{ url('pay_current_salary/'.$employee->id) }}" method="POST" enctype="multipart/form-data">
					@csrf

					    <div class="form-group  row"><label class="col-sm-2 col-form-label text-right"> Salary</label>
                            <div class="col-sm-10"><input type="text" name="advance_salary" class="form-control" placeholder=""><span class="form-text m-b-none">Enter ammount..</span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>
					    <input type="hidden" name="employee_id" value="{{ $employee->id }}">
					    <input type="hidden" name="month" value="{{ date("F",strtotime('-1 month')) }}">
					    <input type="hidden" name="date" value="{{ date('d-m-y') }}">
					    <input type="hidden" name="year" value="{{ date('Y') }}">
					    <input type="hidden" name="status" value="Current">

                       
                         
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Pay Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




















