<?php


namespace App\Http\Services;


interface InterfaceService
{
    public function getAll();

    public function findById($id);

    public function create($request);

    public function update($request, $id);

    public function delete($id);

}