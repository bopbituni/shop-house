<?php


namespace App\Http\Services;


interface ProductInterface extends InterfaceService
{
    public function findByTypeId($type, $paginateNum);

    public function getSearch($request);

}