<?php

namespace App\Http\Controllers;

use App\Models\Arisan;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'arisan_id' => 'required|exists:arisans,id',
            'proof_file' => 'required|file|mimes:jpg,png,pdf|max:2048'
        ]);

        $file = $request->file('proof_file');
        $path = $file->store('proofs', 'public');


        $payment = Payment::create([
            'arisan_id' => $request->arisan_id,
            'user_id' => auth()->id(),
            'proof_file' => $path,
            'status' => 'pending'
        ]);

        return response()->json($payment, 201);
    }

    public function validatePayment($id)
    {
        $payment = Payment::findOrFile($id);
        $payment->update(['status' => 'validated']);
        return response()->json($payment);
    }
}
