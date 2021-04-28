<?php

namespace App\Http\Repositories\Impl;

use App\Customer;
use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getModel() {
       $model = Customer::class;
       return $model;
   }
}
