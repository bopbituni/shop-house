<?php

namespace App\Http\Controllers;

use App\Http\Services\Implement\CustomerServiceImpl;
use App\Http\Services\Implement\PostServiceImpl;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $serPost;
    protected $serCustomer;

    public function __construct(CustomerServiceImpl $serCustomer ,PostServiceImpl $serPost)
    {
        $this->serPost = $serPost;
        $this->serCustomer = $serCustomer;
    }

    public function index()
    {
        $posts = $this->serPost->getAll();
        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $this->serPost->create($request);
        return redirect()->route('admin.posts.list');
    }

    public function edit($id)
    {
        $posts = $this->serPost->findById($id);
        return view('admin.posts.create', compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $this->serPost->update($request, $id);
        return redirect()->route('admin.posts.list');
    }

    public function delete($id)
    {
        $this->serPost->delete($id);
        return redirect()->route('admin.posts.list');
    }
}
