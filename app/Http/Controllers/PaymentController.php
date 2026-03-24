<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Plan;

class PaymentController extends Controller
{
    public function checkout($planId)
    {
        $plan = Plan::findOrFail($planId);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $plan->nombre,
                    ],
                    'unit_amount' => $plan->precio * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', $plan->id),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success($planId)
    {
        $client = auth()->user()->client;

        // Guardar compra (pivot)
        $client->plans()->attach($planId, [
            'start_date' => now(),
            'end_date' => now()->addMonth(),
            'status' => 'active'
        ]);

        return redirect()->route('clients.dashboard')
            ->with('success', 'Pago realizado correctamente');
    }

    public function cancel()
    {
        return redirect()->route('clients.dashboard')
            ->with('error', 'Pago cancelado');
    }
}