<?php

namespace App\Http\Controllers;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
Use Nexmo\Laravel\Facade\Nexmo;
use Session;

class OrdersController extends Controller
{
    public function index(){
      $orders = Orders::all();
      return view('orderv', compact('orders'));
    }

    public function create(){
      return view('orders');
    }

    public function store(Request $request){
        // return $request->all();
        $order = new Orders;
        $order->title = request('title');
        $order->category = request('category');
        $order->description = request('description');
        $order->cost = request('cost');
        $order->mobile = request('mobile');
        $order->save();

        return redirect('/sms');

    }
}
