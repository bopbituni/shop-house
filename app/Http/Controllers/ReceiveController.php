<?php


namespace App\Http\Controllers;


use App\Http\Services\Implement\CustomerServiceImpl;
use Illuminate\Http\Request;

class ReceiveController
{
    protected $customerSer;

    public function __construct(CustomerServiceImpl $customerSer)
    {
        $this->customerSer = $customerSer;
    }

    public function storeReceive(Request $request)
    {
        $this->customerSer->create($request);
        return redirect()->route('shop.typeHouse');
    }
}