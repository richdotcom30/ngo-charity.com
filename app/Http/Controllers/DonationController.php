<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DonationController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'nullable|numeric|min:1|max:100000',
            'custom_amount' => 'nullable|numeric|min:1|max:100000',
            'frequency' => 'required|in:once,monthly',
        ]);

        // Determine the amount to use
        $amount = $request->custom_amount ?: $request->amount;

        if (!$amount) {
            return back()->withErrors(['amount' => 'Please select an amount or enter a custom amount.']);
        }

        // Store donation data in session temporarily
        Session::put('donation_data', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'amount' => $amount,
            'frequency' => $request->frequency,
        ]);

        return redirect()->route('payment.select');
    }

    public function showPaymentSelection()
    {
        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return redirect()->route('donate')->with('error', 'Donation data not found. Please start over.');
        }

        return view('payment.select', compact('donationData'));
    }

    public function showSuccess()
    {
        $donation = Session::get('completed_donation');

        if (!$donation) {
            return redirect()->route('donate');
        }

        return view('payment.success', compact('donation'));
    }
}
