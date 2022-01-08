<?php

namespace App\Http\Controllers;

use App\Order;
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
    public function store(Request $request)
    {
        $rules = $this->getRules();
        $messages = $this->getMessages();
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
      $order = new Order();
      $order ->First_name = $request->First_name;
      $order ->Last_name = $request->input('Last_name');
      $order ->Email = $request->Email;
      $order ->whatsapp_number = $request->whatsapp_number;
      $order ->Message = $request->Message;
      $order ->save();
      return redirect("..")->with(['success'=> __('message.Inserted successfuly')]);
    }

    protected function getRules()
    {
        $rules =[
            'First_name'      => 'required|max:25',
            'Last_name'       => 'required|max:25',
            'Email'           => 'required|max:30|unique:orders',
            'whatsapp_number' => 'required|digits_between:13,14|numeric',
            'Message'         => 'required|max:2000'
        ];
        return $rules;
    }

    protected function getMessages()
    {
        $messages =[
            'First_name.required'      => __('message.First name is required'),
            'Last_name.required'       => __('message.Last name is required'),
            'Email.required'           => __('message.Email is required'),
            'Email.unique'             => __('message.Email already used'),
            'whatsapp_number.required' => __('message.Number is required'),
            'whatsapp_number.digits_between:13,14'    => __('message.Number is required'),
            'Message.required'         => __('message.Message is required'),
        ];
        return $messages;
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
