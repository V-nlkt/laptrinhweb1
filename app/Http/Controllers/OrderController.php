<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        $order_id = $request->get('id');
        $order = Order::with(['orderDetails.product'])->findOrFail($order_id); // eager load

        // Tính tổng tiền đơn hàng
        $total = $order->orderDetails->sum(function ($detail) {
            return $detail->quantity * $detail->price;
        });

        return view('orders.view', [
            'order' => $order,
            'orderDetails' => $order->orderDetails,
            'total' => $total // Truyền tổng tiền xuống view
        ]);
    }
}
