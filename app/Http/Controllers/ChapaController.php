<?php

namespace App\Http\Controllers;

use Chapa\Chapa\Facades\Chapa as Chapa;

class ChapaController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    protected $reference;

    public function __construct(){
        $this->reference = Chapa::generateReference();

    }
    public function initialize()
    {
        //This generates a payment reference
        $reference = $this->reference;
        

        // Enter the details of the payment
        $data = [
            
            'amount' => request()->amount,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "USD",
            'callback_url' => route('callback',[$reference]),
            'first_name' => request()->firstName,
            'last_name' => request()->lastName,
            "customization" => [
                "title" => 'Dummy Laravel',
                "description" => "I amma test this"
            ]
        ];



        

        $payment = Chapa::initializePayment($data);
        
        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return;
        }

        return redirect($payment['data']['checkout_url']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback($reference)
    {
        
        $data = Chapa::verifyTransaction($reference);

        //if payment is successful
        if ($data['status'] ==  'success') {
            return redirect('/pay');
        }

        else{
            //oopsie something ain't right.
        }


    }
}