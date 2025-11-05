<?php
namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'total_orders' => 3,
            'delivered_orders' => 0,
            'total_amount' => 481.34,
            'pending_orders' => 3,
            'revenue' => 37802,
            'order_value' => 28305
        ];
        
        return view('admin.dashboard', $data);
    }
}