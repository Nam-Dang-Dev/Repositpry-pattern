<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function payWithCash(Request $request){

        //  Add necessary logic to process the payment and update the user table 

    }

    // public function payWithPaypal(Request $request){

    //     //  Add necessary logic to process the payment and update the user table 

    // }

    // public function payWithCreditCard(Request $request){

    //     //  Add necessary logic to process the payment and update the user table 

    // }

    public function index(Request $request)
    {
        $result = $this->paymentService->process('credit');
        return $result;
    }
    
    
}
