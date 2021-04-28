<?php

namespace App\Http\Services\Impl;

use App\Http\Repositories\Impl\Payments\CreditCardPayment;
use App\Http\Repositories\Impl\Payments\PaypalPayment;
use App\Http\Services\PaymentService;

class PaymentServiceImpl implements PaymentService
{
    protected $typePayment;

    public function process($typePayment){
        switch ($typePayment) {
            case 'paypal':
                $this->typePayment = new PaypalPayment();
                break;
            case 'credit':
                $this->typePayment = new CreditCardPayment();
                break;
            default:
                break;
        }
        return $this->typePayment->process();
    }
}
