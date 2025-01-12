<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class StripeController extends Controller
{

    public function OneTimePayment(Request $request)
    {
        $request->validate([
            'price' => 'required|max:255',
            'quanity' => 'required|max:255',
        ]);

        Stripe::setApiKey(config('stripe.sk'));

        $checkout_session = \Stripe\Checkout\Session::create([
            'success_url' => $domain_url . '/success.html?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $domain_url . '/canceled.html',
            'mode' => 'payment',
            // 'automatic_tax' => ['enabled' => true],
            'line_items' => [[
              'price' => $request['price'],
              'quantity' => $request['quantity'],
            ]]
          ]);
        // Return a payment url
        return response()->json(['payment_url' => $checkout_session->url]);

    }

    public function paymentIntent(Request $request)
    {
        $request->validate([
            'amount' => 'required|max:255',
        ]);

        Stripe::setApiKey(config('stripe.sk'));

        $paymentIntent = \Stripe\PaymentIntent::create([
          'amount' => $request['amount'],
          'currency' => 'usd',
          'automatic_payment_methods' => ['enabled' => true],
        ]);

        // Return a client secret
        return response()->json(['payment_intent' => $paymentIntent]);

    }
}
