<?php


namespace App\Http\Repositories;


interface ProductInterface extends InterfaceRepository
{
    public function findByTypeId($type, $paginateNum);

    public function getSearch($request);
}