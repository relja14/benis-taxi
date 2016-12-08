<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;

class Ordercontroller extends Controller
{

    public function postOrder(Request $request){
        if ($request->session()->has('order')){
            $order = new Order();
            $order_session = $request->session()->get('order');
            foreach ($order_session as $key => $value) {
                $order->$key = $value;
            }

            $saved = $order->save();
            if ($saved){
                $request->session()->forget('order');
                return redirect()->route('order');
            }
        }
       
    }

    public function postVerifyOrder(OrderRequest $request){
        $order;
        $order['type'] = $request->input('type');    
        $order['title'] = $request->input('title');
        $order['fullname'] = $request->input('fullname');
        $order['address'] = $request->input('address');
        $order['PLZ'] = $request->input('PLZ');
        $order['phone_number'] = $request->input('phone_number');
        $order['email'] = $request->input('email');
        $order['coffer_number'] = $request->input('coffer_number');
        $order['passengers'] = $request->input('passengers');
        $order['comment'] = $request->input('message');
        $order['date'] = $request->input('date');
        $order['time'] = $request->input('time');   
        $order['flight_from'] = $request->input('flight_from');
        $order['flight_number'] = $request->input('flight_number');

        $request->session()->put('order', $order);

        return redirect()->route('order.verify.get');
    }

    public function getVerifyOrder(){

        return view('order_preview');
    }

    public function getOrders(){

    }

    public function getOrderPage($type){
        
        return view('order_input')->with('type', $type);
    }

}
