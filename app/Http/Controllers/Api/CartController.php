<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function checkout(Request $request)
    {
        try {
            $order = new Order();
            $order->user_id = $request->user_id;
            $order->address_id = $request->address_id;
            $order->status = "Pending";
            $order->total = 0;
            $order->note = $request->note;
            $order->save();

            $total = 0;
            foreach ($request->products as $product) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product['id'];
                $orderDetail->quality = $product['quality'];
                $orderDetail->save();

                $total += $orderDetail->product->price * $product['quality'];
            }
            $order->total = $total;
            $order->save();

            return response()->json(['code' => 200, 'message' => 'created order success']);
        } catch (\Throwable $e) {
            return response()->json(['code' => $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
