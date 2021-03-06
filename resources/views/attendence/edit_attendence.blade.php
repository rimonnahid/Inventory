@extends('layouts.app')
@section('title','Edit Attendence')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Today Attendence (<span class="text-danger">{{ $get_date->date }}</span>) </h5>
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
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Attendence</th>
                </tr>
                </thead>
                    
            <form action="{{ URL::to('/update_attendence') }}" method="POST" enctype="multipart/form-data">
                <tbody>

                @csrf
                @foreach($attendences as $attendence)
                    <tr>
                        <input type="hidden" name="id[]" value="{{ $attendence->employee->id }}">
                        <input type="hidden" name="date" value="{{ $attendence->date }}">
                        <input type="hidden" name="month" value="{{ $attendence->month }}">
                        <input type="hidden" name="year" value="{{ $attendence->year }}">
                        <td>{{ $attendence->employee->id }}</td>
                        <td>{{ $attendence->employee->name }}</td>
                        <td>
                            @if($attendence->employee->image)
                            <img src="{{ asset('storage/app/public/'.$attendence->employee->image) }}" height="30px" width="40px">
                            @endif</td>
                        <td>

                        <input type="radio" value="Present" name="attendence[{{$attendence->employee->id}}]" @if($attendence->attendence == 'Present') checked  @endif> Present
                        <input type="radio" value="Absense" name="attendence[{{$attendence->employee->id}}]" @if($attendence->attendence == 'Absense') checked  @endif> Absense
                        </td>
                    </tr>


                @endforeach
                <tr>
                    <td colspan="3"></td>
                    <td>
                        <button class="btn btn-primary btn-sm" type="submit">Save New Attendence</button>
                    </td>
                </tr>
                </tbody>
            </form>
                </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
