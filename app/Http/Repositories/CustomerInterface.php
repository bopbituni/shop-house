<?php


namespace App\Http\Repositories;


interface CustomerInterface extends InterfaceRepository
{
    public function deletePost($object);

    public function attach($object, $product_id);

    public function getUser();
}