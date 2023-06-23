<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\PerfumeProduct;
class OrderController extends Controller
{
    public function create(Request $request)
    {
        $product_name = $request->input('product_name');
        $product_desc = $request->input('product_desc');
        $product_price = $request->input('product_price');
        $product_id = $request->input('product_id');

        $product_image = $request->input('product_image');

        return view('user_pages.order-form', compact('product_name', 'product_desc',  'product_price', 'product_id', 'product_image'));
    }
    public function store(Request $request)
{
    // Retrieve the input data
    $product_name = $request->input('product_name');
    $product_desc = $request->input('product_desc');
    $product_price = $request->input('product_price');
    $quantity = $request->input('quantity');
    $product_image = $request->input('product_image');
    $user_id = auth()->user()->id;

    // Calculate the total price
    $total_price = $quantity * $product_price;

    // Create the order
    Order::create([
        'product_name' => $product_name,
        'product_desc' => $product_desc,
        'product_id' => $request->input('product_id'),
        'quantity' => $quantity,
        'total_price' => $total_price,
        'user_id' => $user_id,
        'product_image' => $product_image,
    ]);

    $product = perfumeProduct::findOrFail($request->input('product_id'));
    $product->stocks -= $quantity;
    $product->timestamps = false; 
    $product->save();

    return view('user_pages.thank-you');
}
public function showOrders()
{
    $user_id = auth()->user()->id;
    $orders = Order::where('user_id', $user_id)->get();

    return view('user_pages.user-order', compact('orders'));
}
    
}
