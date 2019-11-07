<?php

namespace App\Http\Controllers;

use App\Http\Services\Implement\ProductServiceImpl;
use App\Http\Services\Implement\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        Session::flash('success' , 'Thêm mới thành công');
        return redirect()->route('admin.products.list');
    }

    public function edit($id)
    {
        $typeHouses = $this->serType->getAll();
        $products = $this->serProduct->findById($id);

        return view('admin.products.edit', compact('products', 'typeHouses'));
    }

    public function update(Request $request, $id)
    {
        $this->serProduct->update($request->all(), $id);
        Session::flash('update' , 'Cập nhât thành công');
        return redirect()->route('admin.products.list');
    }

    public  function delete($id)
    {
        $this->serProduct->delete($id);

        Session::flash('delete', 'Xóa thành công');
        return redirect()->route('admin.products.list');
    }
}
