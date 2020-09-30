<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\Attendence;
use App\Customer;
use App\Supplier;
use App\Product;
use App\Expense;
use App\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $admins = User::all();
        $employee = Employee::all();
        $attendencetoday = Attendence::Where('date',date('d-m-y'))->where('attendence','Present')->get();
        $customer = Customer::all();
        $supplier = Supplier::all();
        $products = Product::all();
        $expensetoday = Expense::where('date',date('d-m-y'))->get();
        $orders = Order::all();
        $pandingorders = Order::where('order_status','pending')->get();
        $shippedorders = Order::where('order_status','shipped')->get();

        return view('home',compact('admins','employee','attendencetoday','customer','supplier','products','expensetoday','orders','pandingorders','shippedorders'));
    }
}
