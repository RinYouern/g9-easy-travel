<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'amount' => 'required|numeric|min:1',
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount , // Amount in cents
                'currency' => 'usd',
                'payment_method_types' => ['card'],
                'description' => 'Example Payment',
                'metadata' => [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'arrival_date' => $request->arrival_date,
                    'departure_date' => $request->departure_date,
                ],
            ]);

            return response()->json(['clientSecret' => $paymentIntent->client_secret]);
        } catch (ApiErrorException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function listPayments()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentIntents = PaymentIntent::all(['limit' => 10]);

            $payments = array_map(function ($intent) {
                return [
                    'name' => $intent->metadata['name'] ?? null,
                    'email' => $intent->metadata['email'] ?? null,
                    'phone' => $intent->metadata['phone'] ?? null,
                    'arrival_date' => $intent->metadata['arrival_date'] ?? null,
                    'departure_date' => $intent->metadata['departure_date'] ?? null,
                    'amount' => $intent->amount / 100, // Convert amount to dollars
                ];
            }, $paymentIntents->data);

            return response()->json($payments);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}
