<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\order;
use App\Models\tax;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve a list of orders
        // $orders = order::all();
        // return view('orders.index', ['orders' => $orders]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function createOrder(Request $request)
        {
            // Validate the request data
            $request->validate([
                'order_data' => 'required|array',
                'order_data.items' => 'required|array|min:1',
                'order_data.items.*.name' => 'required|string',
                'order_data.items.*.quantity' => 'required|integer|min:1',
                'order_data.items.*.price' => 'required|numeric|min:0',
                'order_data.items.*.taxes' => 'array',
                'order_data.items.*.taxes.*.name' => 'required|string',
                'order_data.items.*.taxes.*.percentage' => 'required|numeric|min:0',
            ]);
    
            // Create a new order
            $order = order::create();
    
            // Add items to the order
            foreach ($request->order_data['items'] as $itemData) {
                $item = new item([
                    'name' => $itemData['name'],
                    'quantity' => $itemData['quantity'],
                    'price' => $itemData['price'],
                ]);
                
                // Save the item to the order
                $order->items()->save($item);
    
                // Add taxes to the item
                if (isset($itemData['taxes']) && is_array($itemData['taxes'])) {
                    foreach ($itemData['taxes'] as $taxData) {
                        $tax = new tax([
                            'name' => $taxData['name'],
                            'percentage' => $taxData['percentage'],
                        ]);
    
                        // Save the tax to the item
                        $item->taxes()->save($tax);
                    }
                }
            }
            // Return a response or redirect as needed
            return response()->json(['message' => 'Order created successfully']);
        }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store a new order in the database
        // order::create($request->all());
        // return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $order = Order::find($id);
        // return view('orders.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
