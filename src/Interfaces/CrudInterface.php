<?php

namespace Ahmobin\LaravelLpa\Interfaces;

interface CrudInterface
{
    public function findAll();

    public function findById(int $id, array $relations = []);

    public function findByKeyValue(string $key, string $value, array $relations = []);

    public function getByKeyValue(string $key, string $value);

    public function store(array $data);

    public function update(array $data, int $id);

    public function deleteById(int $id);

    public function deleteAllByKeyValue(string $key, string $value);

}
