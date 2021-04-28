<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\CustomerService;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();
        return response()->json($customers);
    }

    public function store(Request $request) {
        $customer = $this->customerService->create($request->all());
        return response()->json($customer);
    }
}
