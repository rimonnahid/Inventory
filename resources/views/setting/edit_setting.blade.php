@extends('layouts.app')
@section('title','Edit Setting')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>All Element for Customer</h5>
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
                    <form action="{{ URL::to('update_setting/'.$setting->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Company Name</label>
                            <div class="col-sm-10"><input type="text" name="name" class="form-control" value="{{ $setting->name }}"><span class="form-text m-b-none">Enter a name..</span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Email</label>
                            <div class="col-sm-4"><input type="text" class="form-control" name="email" value="{{ $setting->email }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Phone</label>
                            <div class="col-sm-4"><input type="number" class="form-control" name="phone" value="{{ $setting->phone }}">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Mobile</label>
                            <div class="col-sm-10"><input type="text" name="mobile" class="form-control" value="{{ $setting->mobile }}"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">City</label>
                            <div class="col-sm-10"><input type="text" name="city" class="form-control" value="{{ $setting->city }}"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Country</label>
                            <div class="col-sm-10"><input type="text" name="country" class="form-control" value="{{ $setting->country }}"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Zipcode</label>
                            <div class="col-sm-10"><input type="number" name="zipcode" class="form-control" value="{{ $setting->zipcode }}"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Address</label>
                            <div class="col-sm-10"><input type="text" name="address" class="form-control" value="{{ $setting->address }}"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Image</label>
                            <div class="col-sm-6">   
                                <input type="file" id="file" onchange="productPhoto1(this);" name="logo" class="form-control">
                            </div> 
                            <div class="col-md-4">
                                <img src="" id="productphoto1">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Update Settings</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->

<script>
    
    function productPhoto1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#productphoto1')
                .attr('src', e.target.result)
                .attr("class","img-thumbnail mb-2")
                .attr("height",'180px')
                .attr("width",'180px')
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
