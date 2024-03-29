<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'i' => 'required',
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'options' => 'required'
        ]);

        $order = new Order();
        $order->user = $request->i;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->tel = $request->tel;
        $order->options = $request->options;
        $order->read = false;
        
        $order->save();

        $data = 'ok';
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->read = true;
        $order->update();
        return view('admin.order.show', [
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->name = $request->name;
        $order->email = $request->email;
        $order->tel = $request->tel;
        $order->status = $request->status;
        $order->options = $request->options;

        $order->update();
        return redirect()->back()->withSuccess('Настройки заказа применены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //$order->delete();
        $order->status="Удалён";
        $order->update();
        return redirect()->back()->withSuccess('Заказ удалён');
    }
}
