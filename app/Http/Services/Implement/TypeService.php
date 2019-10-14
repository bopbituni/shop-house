<?php


namespace App\Http\Services\Implement;


use App\Http\Repositories\Implement\TypeRepository;

class TypeService
{
    protected $repoType;

    public function __construct(TypeRepository $repoType)
    {
        $this->repoType = $repoType;
    }

    public function getAll()
    {
        return $this->repoType->getAll();
    }
}