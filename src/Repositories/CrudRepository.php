<?php

namespace Ahmobin\LaravelLpa\Repositories;

use Illuminate\Database\Eloquent\Model;
use Ahmobin\LaravelLpa\Interfaces\CrudInterface;

class CrudRepository implements CrudInterface
{
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findAll()
    {
        return $this->model::all();
    }
}
