<?php

namespace App\Repos;

use Illuminate\Database\Eloquent\Model;

class AbstractRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }


    // create model
    public function create(array $data)
    {
        return $this->model->create($data);
    }


    // update given model
    public function update(Model $model,array $data = [])
    {
        if(isset($data) && is_array($data) && count($data) > 0) {
            return $model->update($data);
        }
        return $model->save();
    }

    // find and update record in the database
    public function findAndUpdate($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        return $record->update($data);
    }


    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }


    // get the record with the given id
    public function get($id)
    {
        return $this->model->findOrFail($id);
    }


    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }


    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }


    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    // return for select
    public function pluck($field1, $field2 = 'id') {
        return $this->model->pluck($field1, $field2);
    }

    // get all records with the given ids
    public function getMany($ids)
    {
        return $this->model->whereIn('id', $ids)->get();
    }
}