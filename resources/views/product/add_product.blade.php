@extends('layouts.app')
@section('title','Add Product')

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
                    <form action="{{ URL::to('add_product') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Name</label>
                            <div class="col-sm-10"><input type="text" name="name" class="form-control"><span class="form-text m-b-none">Enter a name..</span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Category</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cate_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Employee</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="supplier_id">
                                    @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Product Code</label>
                            <div class="col-sm-4"><input type="text" class="form-control" name="product_code">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Product Garage</label>
                            <div class="col-sm-4"><input type="text" class="form-control" name="product_garage">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Product Route</label>
                            <div class="col-sm-10"><input type="text" name="product_route" class="form-control"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Baying Date</label>
                            <div class="col-sm-4"><input type="date" class="form-control" name="buy_date">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Expire Date</label>
                            <div class="col-sm-4"><input type="date" class="form-control" name="expire_date">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>



                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Buying Price</label>
                            <div class="col-sm-10"><input type="number" name="buying_price" class="form-control"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Selling Price</label>
                            <div class="col-sm-10"><input type="number" name="selling_price" class="form-control"><span class="form-text m-b-none"></span></div> 
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Image</label>
                            <div class="col-sm-6">   
							  	<input type="file" id="file" onchange="productPhoto1(this);" name="image" class="form-control">
							</div> 
							<div class="col-md-4">
                            	<img src="" id="productphoto1">
							</div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Save Product</button>
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
