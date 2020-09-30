@extends('layouts.app')
@section('title','Add Sallary')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Pay advance sallary for Employee</h5>
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
                    <form action="{{ URL::to('add_advance_salary') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Employee</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="employee_id">
                                    @foreach($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                                <span class="form-text m-b-none">Enter a name..</span>
                            </div> 
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Month</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="month">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                                <span class="form-text m-b-none">Enter a name..</span>
                            </div> 
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Year</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="year">
                                    <option>2020</option>
                                    <option>2019</option>
                                </select>
                                <span class="form-text m-b-none">Enter a name..</span>
                            </div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option value="Advance">Advance</option>
                                    <option value="Due">Due</option>
                                </select>
                                <span class="form-text m-b-none">Enter a name..</span>
                            </div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <input type="hidden" name="date" value="{{ date('d-m-y') }}">



                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Advance Salary</label>
                            <div class="col-sm-10"><input type="text" name="advance_salary" class="form-control"><span class="form-text m-b-none">Enter a name..</span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        
                         
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
