<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGateway $paymentGateway) {

        $order = $orderDetails->all();

        auth()->user()->payments()->create([
              'id' => $order['orderID'],
              'entity' => 'order',
              'amount' => $order['amount'],
              'currency' => 'INR',
              'attempts' => 0,
              'status' => 'created',
              'receipt'=> 'receipt#42',
              'notes'=> [],
            ]);
        dd($paymentGateway->charge(2500));
    }
}
