<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;

    public function __construct()
    {
        $this->setModel(); 
    }

    abstract public function getModel();
    
    public function setModel() {
        return $this->model = app()->make($this->getModel());
    }

    public function getAll() {
        return $this->model::orderBy('created_at', 'desc')->get();
    }

    public function create($data) {
        try {
            $object = $this->model->create($data);
        } catch (\Exception $e) {
            return null;
        }
        return $object;
    }
}
