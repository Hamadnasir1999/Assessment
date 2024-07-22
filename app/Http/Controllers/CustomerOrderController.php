<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    public function highestSpendingCustomer()
    {
        $customer = Customer::with('orders')
            ->get()
            ->sortByDesc(function($customer) {
                return $customer->orders->sum('amount');
            })->first();

        return view('customers.highestSpending', compact('customer'));
    }

    public function mostOrdersCustomer()
    {
        $customer = Customer::withCount('orders')
            ->orderBy('orders_count', 'desc')
            ->first();

        return view('customers.mostOrders', compact('customer'));
    }
}
