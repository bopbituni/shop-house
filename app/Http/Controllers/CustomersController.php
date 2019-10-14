<?php

namespace App\Http\Controllers;

use App\Http\Services\Implement\CustomerServiceImpl;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    protected $serCustomer;

    public function __construct(CustomerServiceImpl $serCustomer)
    {
        $this->serCustomer = $serCustomer;
    }

    public function index()
    {

        $users = $this->serCustomer->getUser();
        $customers = $this->serCustomer->getAll();
        return view('admin.users.list', compact('customers', "users"));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->serCustomer->create($request);
        return redirect()->route('admin.users.list');
    }

    public function edit($id)
    {
        $customers = $this->serCustomer->findById($id);
        return view('admin.users.edit', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        $this->serCustomer->update($request->all(), $id);
        return redirect()->route('admin.users.list');
    }

    public function delete($id)
    {
        $this->serCustomer->delete($id);
        return redirect()->route('admin.users.list');
    }


}
