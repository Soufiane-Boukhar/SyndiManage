<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PaymentController extends Controller
{
    public function generateReceipt($id)
    {
        
        $pdf = PDF::loadView('receipt', compact('paymentDetails'));

        return $pdf->download('payment_receipt.pdf');
    }
}
