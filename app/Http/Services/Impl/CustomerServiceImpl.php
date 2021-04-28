<?php

namespace App\Http\Services\Impl;

use App\Http\Repositories\CustomerRepository;
use App\Http\Services\CustomerService;

class CustomerServiceImpl implements CustomerService
{
    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll() {
        $customers = $this->customerRepository->getAll();
        return $customers;
    }

    public function create($data) {
        $customer = $this->customerRepository->create($data);
        return $customer;
    }
}
