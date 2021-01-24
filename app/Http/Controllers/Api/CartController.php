<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /* 
     * @param int product_id
     * */
    public function addToCart(Request $request)
    {
        $check = Cart::where('user_id', $request->user()->id)
            ->where('product_id', $request->product_id)
            ->first();
        if ($check) {
            $check->quantity += 1;
            $check->save();
            return response()->json(['cart' => $check]);
        } else {
            $cart = new Cart();
            $cart->user_id = $request->user()->id;
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return response()->json(['created cart']);
        }
    }

    public function getCarts(Request $request)
    {
        $carts = Cart::where('user_id', $request->user()->id)->get();
        return CartResource::collection($carts);
    }

    public function removeCart(Request $request)
    {
        Cart::find($request->id)->delete();
    }

    public function checkout(Request $request)
    {
        $order = new Order();
        try {
            $order->user_id = $request->user()->id;
            $order->address_id = $request->address_id;
            $order->status = "Pending";
            $order->total = 0;
            $order->note = $request->note;
            $order->save();

            $total = 0;
            $carts = Cart::where('user_id', $request->user()->id)->get();
            foreach ($carts as $cart) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cart['product_id'];
                $orderDetail->quantity = $cart['quantity'];
                $orderDetail->total = $orderDetail->product->price * $cart['quantity'];
                $orderDetail->save();

                $total += $orderDetail->product->price * $cart['quantity'];
            }
            $order->total = $total;
            $order->save();
            Cart::where('user_id', $request->user()->id)->delete();
            return response()->json(['code' => 200, 'message' => 'created order success']);
        } catch (\Throwable $e) {
            $order->delete();
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
