@extends('layouts.app')
@section('title','POS | Point of sell')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading mt-4">
    <div class="col-lg-12">
        <h2>POS (Point Of Sell)</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Admin</a>
            </li>
            <li class="breadcrumb-item">
                <a>POS</a>
            </li>
        </ol>
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
 	
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <label class="text-danger">Categories :</label>
                    @foreach($categories as $category)
                        <a href="#" class="btn btn-primary" style="border-radius:0;">{{ $category->cate_name }}</a>
                    @endforeach
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Carts  list</h5>
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
                    <div style="display: none;" class="newcustomer mb-4">
                        New Customer
                        <button type="button" class="btn btn-primary pull-right " data-toggle="modal" data-target="#myModal2">
                            Add Now
                        </button>
                    </div>
                        
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>

                        @foreach($viewcarts as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td><form action="{{ url('/cartupdate/'.$data->rowId) }}" method="POST">
                                    @csrf
                                    <input type="number" name="qty" value="{{ $data->qty }}" class="form-control-sm" style="width:70px; float:left;">
                                    <button type="submit" class="btn-sm">+</button>
                                </form>
                            </td>
                            <td>৳{{ $data->price }}</td>
                            <td>৳{{ $data->qty * $data->price }}</td>
                            <td><a class="btn btn-sm btn-danger" href="{{ route('cart.delete',$data->rowId) }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        @endforeach

        
                    <!-- Order Total -->
                        <tr>
                            <td colspan="3" class="text-right font-weight-bold">Order Total = </td>
                            <td>৳{{ Cart::subtotal() }}</td>
                            <td></td>
                        </tr>
                    </table>

                    <form action="{{ url('create_invoice') }}" method="POST" >
                        @if($errors->any())
                        <h5 class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                {{ $error }}
                                @endforeach
                        </h5>
                        @endif
                    <select class="form-control" name="customer_id" id="customer_id">
                        <option value="" disabled="" selected="">Select a customer</option>
                        <option value="newcustomer">Add a New Customer</option>
                        @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                        @csrf
                    <button type="submit" class="btn btn-primary">Create Invoice</button>

                    </form>{{-- 
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $customer->phone }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $customer->shopname }}</td>
                        </tr>
                    </table> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>There are all Product list</h5>
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
                            <th>Image</th>
                            <th>Name </th>
                            <th>Category</th>
                            <th>Code</th>
                            <th>Add</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr class="gradeX">
                        <form action="{{ url('/add-cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="selling_price" value="{{ $product->selling_price }}">
                            <td>{{ $product->id }}</td>
                            <td>
                                @if($product->image)
                                <img src="{{ asset('storage/app/public/'.$product->image) }}" height="30px" width="40px">
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->cate_name }}</td>
                            <td>{{ $product->product_code }}</td>
                            <td>
                                <button type="submit" class="btn btn-success btn-xs">add</button>
                            </td>
                        </form>
                        </tr>
                            
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th width="15%">SL</th>
                            <th>Image</th>
                            <th>Name </th>
                            <th>Category</th>
                            <th>Code</th>
                            <th>Add</th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


{{-- Add customer Modal --}}


<form action="{{ URL::to('add_customer') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Customer Form</h4>
                <small class="font-bold">Hi,This is Mohammed Nahidul Islam Rimon .I am a student of Diploma in Computer Engineering</small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="@gmail.com">
                    </div>

                    <div class="col-lg-4">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="01xxxxxxxxx">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label>Shop name</label>
                        <input type="text" name="shopname" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label>Bank Name</label>
                        <input type="text" name="bank_name" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label>Account holder</label>
                        <input type="text" name="account_holder" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label>Account number</label>
                        <input type="text" name="account_number" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label>Bank Branch</label>
                        <input type="text" name="bank_branch" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label>City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <label>Image</label>
                        <input type="file" id="file" onchange="productPhoto1(this);" name="image" class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <img src="" id="productphoto1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>

<!-- Mainly scripts -->

<script src="{{ asset('public/back/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('public/back/js/popper.min.js') }}"></script>
<script src="{{ asset('public/back/js/bootstrap.js') }}"></script>
<script>
    
    function productPhoto1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#productphoto1')
                .attr('src', e.target.result)
                .attr("class","img-thumbnail mb-2")
                .attr("height",'100px')
                .attr("width",'100px')
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
    $(document).on('change','#customer_id',function(){
        var customer_id = $(this).val();
        if(customer_id == 'newcustomer'){
            $('.newcustomer').show();
        }else{
            $('.newcustomer').hide();
        }
    });
</script>
@endsection
