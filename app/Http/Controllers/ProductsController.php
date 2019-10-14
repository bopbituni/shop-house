<?php

namespace App\Http\Controllers;

use App\Http\Services\Implement\ProductServiceImpl;
use App\Http\Services\Implement\TypeService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $serProduct;
    protected $serType;

    public function __construct(ProductServiceImpl $serProduct, TypeService $serType)
    {
        $this->serProduct = $serProduct;
        $this->serType = $serType;
    }

    public function index()
    {
        $typeHouses = $this->serType->getAll();
        $products = $this->serProduct->getAll();
        return view('admin.products.list', compact('products', 'typeHouses' ));
    }

    public function create()
    {
        $typeHouses = $this->serType->getAll();
        return view('admin.products.create', compact('typeHouses'));
    }

    public function store(Request $request)
    {
        $this->serProduct->create($request);
        return redirect()->route('admin.products.list');
    }

    public function edit($id)
    {
        $products = $this->serProduct->findById($id);
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $this->serProduct->update($request->all(), $id);
        return redirect()->route('admin.products.list');
    }

    public  function delete($id)
    {
        $this->serProduct->delete($id);
        return redirect()->route('admin.products.list');
    }
}
