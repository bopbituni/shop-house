<?php


namespace App\Http\Services\Implement;


use App\Customer;
use App\Http\Repositories\Implement\CustomerRepositoryImpl;
use App\Http\Repositories\Implement\PostRepositoryImpl;
use App\Http\Services\CustomerInterface;

class CustomerServiceImpl implements CustomerInterface
{
    protected $repoCustomer;
    protected $repoPost;

    public function __construct(PostRepositoryImpl $repoPost, CustomerRepositoryImpl $repoCustomer)
    {
        $this->repoCustomer = $repoCustomer;
        $this->repoPost = $repoPost;
    }

    public function getAll()
    {
        return $this->repoCustomer->getAll();
    }

    public function findById($id)
    {
        return $this->repoCustomer->findById($id);
    }

    public function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->date = $request->date;
        $customer->time = $request->time;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->content = $request->content;
        return $this->repoCustomer->store($customer);
    }


    public function update($request, $id)
    {
        $customer = $this->repoCustomer->findById($id);
        $this->repoCustomer->update($request, $customer);
    }

    public function delete($id)
    {
        $customer = $this->repoCustomer->findById($id);
        $this->repoCustomer->deletePost($customer);
        $this->repoCustomer->delete($customer);
    }

    public function attach($id)
    {
        // TODO: Implement attach() method.
    }

    public function getUser()
    {
        $users = $this->repoCustomer->getUser();
        foreach ($users as $user) {
            $email = $user->email;
        }
        return $email;
    }
}