<?php

namespace App\Http\Services;

interface CustomerService
{
    public function getAll();

    public function create($data);
}
