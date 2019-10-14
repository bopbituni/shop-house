<?php


namespace App\Http\Controllers;


use App\Http\Services\Implement\ProductServiceImpl;
use Illuminate\Http\Request;

class HomeStateController
{
    protected $productSer;

    public function __construct(ProductServiceImpl $productSer)
    {
        $this->productSer = $productSer;
    }

    public function index()
    {
        $snowHouses = $this->productSer->findByTypeId(4,3);
        $products = $this->productSer->getAll();
        return view('layouts.home.index', compact('products', 'snowHouses'));
    }


    public function getSearch(Request $request)
    {
        $products = $this->productSer->getSearch($request);

        return view('shop.search' , compact('products'));
    }
}