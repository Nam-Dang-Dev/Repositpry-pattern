<?php

namespace App\Http\Repositories\Impl\Payments;

use App\Http\Repositories\PaymentRepository;
use Illuminate\Support\Facades\Log;

class PaypalPayment implements PaymentRepository
{
    public function process() {
        /** Add necessary logic to process the payment and update the user table **/
        Log::info("process paypal -----------------------");
        return 'paypal';
    }
}
