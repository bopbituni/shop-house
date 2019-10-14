<?php


namespace App\Http\Repositories\Implement;


use App\Customer;
use App\Http\Repositories\CustomerInterface;
use App\User;

class CustomerRepositoryImpl implements CustomerInterface
{
    protected $customer;
    protected $user;

    public function __construct(User $user,Customer $customers)
    {
        $this->user = $user;
        $this->customer = $customers;
    }

    public function getAll()
    {
        return $this->customer->all();
    }

    public function findById($id)
    {
        return $this->customer->findOrFail($id);
    }

    public function store($object)
    {
        return $object->save();
    }

    public function update($data, $object)
    {
        $object->update($data);
        return $object;
    }

    public function delete($object)
    {
        return $object->delete();
    }

    public function deletePost($object)
    {
        return $object->posts()->delete();
    }

    public function attach($object, $product_id)
    {
        return $object->products()->attach($product_id);
    }

    public function getUser()
    {
        return $this->user->all();
    }
}