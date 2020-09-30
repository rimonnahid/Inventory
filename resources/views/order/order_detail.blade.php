@extends('layouts.app')
@section('title',$order->customer->name.' | Have Order')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Invoice</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Invoice</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4">
        <div class="title-action">
            <a href="#" class="btn btn-white"><i class="fa fa-pencil"></i> Edit </a>
            <a href="#" class="btn btn-white"><i class="fa fa-check "></i> Save </a>
            <a href="invoice_print.html" onclick="window()" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>From:</h5>
                            <address>
                                <strong>{{ $setting->name }}</strong><br>
                                Address : {{ $setting->address }}<br>
                                City : {{ $setting->city }}, {{ $setting->country }}<br>
                                Phone : {{ $setting->phone }},{{ $setting->mobile }}
                            </address>
                        </div>

                        <div class="col-sm-6 text-right">
                            <h4>Invoice No.</h4>
                            <h4 class="text-navy">INV-000567F7-00</h4>
                            <span>To:</span>
                            <address>
                                <strong>{{ $order->customer->name }}</strong><br>
                                <strong>{{ $order->customer->shopname }}</strong><br>
                                Address :{{ $order->customer->address }}<br>
                                City : {{ $order->customer->city }}<br>
                                Phone : {{ $order->customer->phone }}
                            </address>
                            <p>
                                <span><strong>Invoice Date:</strong>{{ date('l jS \of F Y') }}</span><br/>
                                <span><strong>Due Date:</strong> March 24, 2014</span>
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive m-t">
                        <table class="table invoice-table">
                            <thead>
                            <tr>
                                <th>Item List</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orderdetails as $orderdetail)
                            <tr>
                                <td><div><strong>{{ $orderdetail->product->name }}</strong></div></td>
                                <td>{{ $orderdetail->quantity }}</td>
                                <td>{{ $orderdetail->unitcost }}</td>
                                <td>{{ $orderdetail->total }}</td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!-- /table-responsive -->
                    <div class="row">
                        <div class="col-lg-4">    
                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Pay Method :</strong></td>
                                    <td>{{ $order->payment_status }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Pay :</strong></td>
                                    <td>{{ $order->pay }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Due :</strong></td>
                                    <td>{{ $order->due }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-8">
                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td>{{ $order->subtotal }}</td>
                                </tr>
                                <tr>
                                    <td><strong>TAX :</strong></td>
                                    <td>{{ $order->vat }}</td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>{{ $order->total }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    @if($order->due > 0)
                    <div class="text-right">
                        <a href="{{ url('/pos_done/'.$order->order_id) }}" type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal2"> Done</a>
                    </div>
                    @else
                    <div class="text-right">
                        <a href="{{ url('/pos_done/'.$order->order_id) }}" type="submit" class="btn btn-primary"> Done</a>
                    </div>
                    @endif

                    <div class="well m-t"><strong>Comments</strong>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                    </div>
                </div>
        </div>
    </div>
</div>



{{-- Invoice confirmation modal here --}}
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Payment form <span class="pull-right mr-3">Total: {{ $order->total }}</span><br><span class="pull-right mr-5">Pay: {{ $order->subtotal }}</span></h4> 
                <small class="font-bold">This order created by {{ $order->customer->name }} .Now make the payment and confirm the order </small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <label>Payment</label>
                        <select class="form-control" name="payment_status">
                            <option value="Handcash">Handcash</option>
                            <option value="Chaque">Chaque</option>
                            <option value="Due">Due</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <label>Pay</label>
                        <input type="text" name="pay" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-4">
                        <label>Due</label>
                        <input type="hidden" name="due" class="form-control" placeholder="" value="{{ str_replace(',', '', Cart::subtotal()) }}">
                    </div>
                </div>

                <input type="hidden" name="customer_id" value="{{ $order->customer->id }}">
                <input type="hidden" name="order_date" value="{{ date('d-m-y') }}">
                <input type="hidden" name="order_status" value="Pending">
                <input type="hidden" name="total_product" value="{{ Cart::count() }}">
                <input type="hidden" name="subtotal" value="{{ Cart::subtotal() }}">
                <input type="hidden" name="vat" value="{{ Cart::tax() }}">
                <input type="hidden" name="total" value="{{ Cart::total() }}">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</form>

@endsection