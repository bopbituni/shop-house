<?php


namespace App\Http\Repositories;


interface InterfaceRepository
{
    public function getAll();

    public function findById($id);

    public function store($object);

    public function update($object, $data);

    public function delete($object);
}