<?php


namespace App\Http\Repositories\Implement;


use App\Customer;
use App\Http\Repositories\ProductInterface;
use App\Product;

class ProductRepositoryImpl implements ProductInterface
{
    protected $product;

    public function __construct(Product $products)
    {
        $this->product = $products;
    }

    public function getAll()
    {
        return $this->product->all();
    }

    public function findById($id)
    {
        return $this->product->findOrFail($id);
    }

    public function store($object)
    {
        return $object->save();
    }

    public function update($object, $data)
    {
        return $object->update($data);
    }

    public function delete($object)
    {
        return $object->delete();
    }

    public function findByTypeId($type, $paginateNum)
    {
        return $this->product->where('type_id', $type)->paginate($paginateNum);
    }


    public function getSearch($request)
    {
        $getSearch = $this->product->where("name", 'like', "%" . $request['name'] . "%")
            ->orWhere("status", $request['status'])
            ->orWhere("type_id", $request['type_id'])
            ->orWhereBetween("price", [$request['fromPrice'], $request['toPrice']])
            ->orWhereBetween("bedroom", [$request['fromBedroom'], $request['toBedroom']])
            ->orWhereBetween("bathroom", [$request['fromBathroom'], $request['toBathroom']])
            ->orWhereBetween("area", [$request['fromArea'], $request['toArea']])->get();
        return $getSearch;
    }
}