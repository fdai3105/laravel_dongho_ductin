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
        $order = new Order();
        $orderDetail = new OrderDetail();
        try {
            $order->user_id = $request->user_id;
            $order->address_id = $request->address_id;
            $order->status = "Pending";
            $order->total = 0;
            $order->note = $request->note;
            $order->save();

            $total = 0;
            foreach ($request->products as $cart) {
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cart['id'];
                $orderDetail->quantity = $cart['quantity'];
                $orderDetail->total = $orderDetail->product->price * $cart['quantity'];
                $orderDetail->save();

                $total += $orderDetail->product->price * $cart['quantity'];
            }
            $order->total = $total;
            $order->save();

            return response()->json(['code' => 200, 'message' => 'created order success']);
        } catch (\Throwable $e) {
            $order->delete();
            $orderDetail->delete();
            return response()->json(['code' => $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}
