<?php


namespace App\Http\Controllers;


use App\Http\Services\Implement\CustomerServiceImpl;
use App\Http\Services\Implement\ProductServiceImpl;
use App\Http\Services\Implement\TypeService;
use Illuminate\Http\Request;

class TypesController
{
    protected $typeSer;
    protected $productSer;
    protected $customerSer;

    public function __construct(TypeService $typeSer, ProductServiceImpl $productSer)
    {
        $this->typeSer = $typeSer;
        $this->productSer = $productSer;
    }

    public function index()
    {
        $types = $this->typeSer->getAll();
        return view('admin.products.list', compact('types'));
    }

    public function getTypeHouse($type)
    {
        $typeHouses = $this->productSer->findByTypeId($type ,6);
        return view('shop.typeHouse', compact('typeHouses'));
    }

    public function getDetail($id)
    {
        $product = $this->productSer->findById($id);
        return view('shop.detail', compact('product'));
    }


}