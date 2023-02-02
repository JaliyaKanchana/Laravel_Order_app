<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->ajax()) {

            $orders = Order::with('user','package')->get();
            return Datatables::of($orders)
                ->make(true);
        }

        return view('orders.index');
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'user_id' => 'required',
            'package_id' => 'required',
            'purchase_date' => 'required',
            'expired_day' => 'required',
            'payment_method' => 'required',
            'amount_usd' => 'required',
            'amount_real_currency' => 'required',
            'currency_type' => 'required',
            'currency_icon' => 'required',
        ]);

        $order = new Order([
            'order_id' => $request->get('order_id'),
            'user_id' => $request->get('user_id'),
            'package_id' => $request->get('package_id'),
            'purchase_date' => $request->get('purchase_date'),
            'expired_day' => $request->get('expired_day'),
            'payment_method' => $request->get('payment_method'),
            'amount_usd' => $request->get('amount_usd'),
            'amount_real_currency' => $request->get('amount_real_currency'),
            'currency_type' => $request->get('currency_type'),
            'currency_icon' => $request->get('currency_icon'),
        ]);

        $order->save();

        return redirect('/orders')->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified order.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}
