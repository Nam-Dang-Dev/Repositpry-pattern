<?php

namespace App\Http\Services;

interface PaymentService
{
    public function process($typePayment);
}
