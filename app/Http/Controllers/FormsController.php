<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function process(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'plan' => 'required|string|in:basic,pro,enterprise',
        ]);

        $plan = $validated['plan'];

        // Here you can:
        // - Create an order record in the DB
        // - Integrate with payment gateway (Stripe, PayPal, etc)
        // - Redirect user to payment page
        // - Send confirmation email

        // For now, show a confirmation view with the selected plan
        return view('forms.confirmation', compact('plan'));
    }
}