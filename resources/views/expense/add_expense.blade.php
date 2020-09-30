@extends('layouts.app')
@section('title','Add Expense')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>All Element for Add Category</h5>
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
                    <form action="{{ URL::to('add_expense') }}" method="POST" enctype="multipart/form-data">
                    	@csrf

                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Expense Details</label>
                            <div class="col-sm-10"><textarea class="form-control" name="details"></textarea><span class="form-text m-b-none">Describe expense</span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Ammount</label>
                            <div class="col-sm-10"><input type="text" name="ammount" class="form-control"><span class="form-text m-b-none">Enter Ammount</span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>

                        <input type="hidden" name="date" value="{{ date("d/m/y") }}">
                        <input type="hidden" name="month"  value="{{ date("F") }}">
                        <input type="hidden" name="year" value="{{ date("Y") }}">


                        
                         
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
