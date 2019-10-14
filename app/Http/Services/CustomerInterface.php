<?php


namespace App\Http\Services;


interface CustomerInterface extends InterfaceService
{
    public function attach($id);

    public function getUser();
}