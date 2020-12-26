<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all models in storage
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Create model in storage
     *
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * Update model in storage
     *
     * @param array $attributes
     * @param $id
     * @return Model
     */
    public function update(array $attributes, $id): Model
    {
        return $this->model->where('id', $id)->update($attributes);
    }

    /**
     * Find model by id
     *
     * @param $id
     * @return Model
     */
    public function find($id): Model
    {
        return $this->model->find($id);
    }

    /**
     * Find model by field
     *
     * @param $field
     * @param $value
     * @return Model
     */
    public function findByField($field, $value): Model
    {
        return $this->model->where($field, $value)->first();
    }

    /**
     * Delete model in storage
     *
     * @param $id
     * @return int
     */
    public function delete($id): int
    {
        return $this->model->destroy($id);
    }
}
