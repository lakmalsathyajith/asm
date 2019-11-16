<?php

namespace App\Contracts\RepoInterfaces;


use Illuminate\Database\Eloquent\Model;

interface AbstractInterface
{
    public function all();

    public function create(array $data);

    public function findAndUpdate($id, array $data);

    public function update(Model $model, array $array);

    public function delete($id);

    public function get($id);

    public function pluck($field1, $field2 = null);
}