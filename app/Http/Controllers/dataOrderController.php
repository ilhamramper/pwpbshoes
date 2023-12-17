<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class dataOrderController extends Controller
{
    public function order()
    {
        $orders = Order::orderBy('id_order', 'asc')
            ->get()
            ->groupBy('id_order')
            ->map(function ($group) {
                return $group->first();
            })
            ->map(function ($order) {
                $total = Order::where('id_order', $order->id_order)->sum('total');
                $additionalAmount = ($order->shipping_id == 1) ? 5.00 : (($order->shipping_id == 2) ? 20.00 : 0);
                $order->total = $total + $additionalAmount;

                return $order;
            });

        return view('admin.DataOrder.dataorder', compact('orders'));
    }
}
