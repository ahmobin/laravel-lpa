<?php

namespace Ahmobin\LaravelLpa\Repositories;

use Illuminate\Database\Eloquent\Model;
use Ahmobin\LaravelLpa\Interfaces\CrudInterface;
use Illuminate\Support\Collection;

class CrudRepository implements CrudInterface
{
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findAll(): collection
    {
        return $this->model::all();
    }

    public function findById(int $id, array $relations = []): ?Model
    {
        return $this->model::with($relations)->find($id);
    }

    public function findByKeyValue(string $key, string $value, array $relations = []): ?Model
    {
        return $this->model::with($relations)->where($key, $value)->first();
    }

    public function getByKeyValue(string $key, string $value): collection
    {
        return $this->model::where($key, $value)->get();
    }

    public function store(array $data): ?Model
    {
        return $this->model::create($data);
    }

    public function update(array $data, int $id): bool
    {
        $item = $this->findById($id);
        return $item->update($data);
    }


    public function deleteById(int $id): void
    {
        $item = $this->findById($id);
        $item->delete();
    }

    public function deleteAllByKeyValue(string $key, string $value): void
    {
        $item = $this->findByKeyValue($key, $value);
        $item->delete();
    }
}
