<?php

namespace App\Http\Repositories\Impl\Payments;

use Illuminate\Support\Facades\Log;
use App\Http\Repositories\PaymentRepository;

class CreditCardPayment implements PaymentRepository
{
    public function process() {
        /** Add necessary logic to process the credit card and update the user table **/
        Log::info("process credit -----------------------");
        return 'credit card';
    }
}
