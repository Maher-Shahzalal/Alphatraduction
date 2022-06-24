<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\Services\OrderService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = \App\Order::all();
        return view('admin.show_orders')->with('Order',Order::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request,OrderService $service)
    {
       $order = $service->storeNewOreder(
           $request->First_name,
           $request->Last_name,
           $request->Email,
           $request->whatsapp_number,
           $request->Message
       );
      return redirect("..")->with(['success'=> __('message.Inserted successfuly')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        $order = Order::find($order);
        $order->delete();
        return redirect("/admin_home/show_orders")->with(['success'=> __('admin.Order Deleted successfuly')]);
    }
}
