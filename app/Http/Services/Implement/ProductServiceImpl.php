<?php


namespace App\Http\Services\Implement;


use App\Http\Repositories\Implement\ProductRepositoryImpl;
use App\Http\Services\ProductInterface;
use Illuminate\Support\Facades\Storage;
use App\Product;

class ProductServiceImpl implements ProductInterface
{
    protected $repoProduct;

    public function __construct(ProductRepositoryImpl $repoProduct)
    {
        $this->repoProduct = $repoProduct;
    }

    public function getAll()
    {
        return $this->repoProduct->getAll();
    }

    public function findById($id)
    {
        return $this->repoProduct->findById($id);
    }

    public function create($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->area = $request->area;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->title = $request->title;
        $product->content = $request->content;
        $product->type_id = $request->type_id;
        $product->bedroom = $request->bedroom;
        $product->bathroom = $request->bathroom;
        $product->garage = $request->garage;
        $product->address = $request->address;
        $product->introduce = $request->introduce;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }

        $this->repoProduct->store($product);
    }

    public function update($request, $id)
    {
        $products = $this->repoProduct->findById($id);
        $this->repoProduct->update($products, $request);
    }

    public function delete($id)
    {
        $products = $this->repoProduct->findById($id);
        $this->repoProduct->delete($products);
    }

    public function findByTypeId($type, $paginateNum)
    {
        return $this->repoProduct->findByTypeId($type, $paginateNum);
    }

    public function getSearch($request)
    {
        return $this->repoProduct->getSearch($request->all());
    }
}