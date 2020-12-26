<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EloquentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param array $attributes
     * @param $id
     * @return Model
     */
    public function update(array $attributes, $id): Model;

    /**
     * @param $id
     * @return Model
     */
    public function find($id): Model;

    /**
     * @param $field
     * @param $value
     * @return Model
     */
    public function findByField($field, $value): Model;

    /**
     * @param $id
     * @return int
     */
    public function delete($id): int;
}
