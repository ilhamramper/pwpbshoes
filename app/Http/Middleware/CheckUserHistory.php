<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Order;

class CheckUserHistory
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $order = Order::where('id_order', $id)->first();

        if ($order && $order->user_id != auth()->id()) {
            return redirect()->route('history')->with('error', 'Unauthorized access to history detail.');
        }

        return $next($request);
    }
}
