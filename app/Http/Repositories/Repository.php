<?php

namespace App\Http\Repositories;

interface Repository
{
    public function getAll();

    public function create($data);
}
