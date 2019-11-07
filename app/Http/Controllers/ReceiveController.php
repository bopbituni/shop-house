<?php


namespace App\Http\Controllers;


use App\Http\Requests\CheckFormDetail;
use App\Http\Services\Implement\CustomerServiceImpl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReceiveController
{
    protected $customerSer;

    public function __construct(CustomerServiceImpl $customerSer)
    {
        $this->customerSer = $customerSer;
    }

    public function storeReceive(CheckFormDetail $request)
    {
        $this->customerSer->create($request);

        Session::flash('success', 'Cảm ơn quý khách chúng tôi sẽ liên lạc với quý khách trong thời gian sớm nhất!!');
        return redirect()->route('shop.home');
    }
}