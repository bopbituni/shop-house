<?php


namespace App\Http\Repositories\Implement;


use App\Type;

class TypeRepository
{
    protected $types;

    public function __construct(Type $types)
    {
        $this->types = $types;
    }

    public function getAll()
    {
        return $this->types->all();
    }



}