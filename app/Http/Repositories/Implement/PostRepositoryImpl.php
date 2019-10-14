<?php


namespace App\Http\Repositories\Implement;


use App\Customer;
use App\Http\Repositories\PostInterface;
use App\Post;

class PostRepositoryImpl implements PostInterface
{
    protected $post;
    protected $customer;

    public function __construct(Customer $customer, Post $post)
    {
        $this->post = $post;
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->post->all();
    }

    public function findById($id)
    {
        return $this->post->findOrFail($id);
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
}
