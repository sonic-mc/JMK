<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(Request $request)
    {
        // Get product name from query string if provided
        $product = $request->query('product', '');
        $type = $request->query('type', '');
        
        return view('quote.request', [
            'title' => 'Request a Quote - JMK Trading',
            'product' => $product,
            'type' => $type
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'product' => 'required|string|max:255',
            'quantity' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Send confirmation email to customer

        return redirect()->route('quote.success')->with('success', 'Your quote request has been received! We will contact you shortly.');
    }

    public function success()
    {
        return view('quote.success', [
            'title' => 'Quote Request Received - JMK Trading'
        ]);
    }
}
