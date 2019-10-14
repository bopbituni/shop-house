<?php


namespace App\Http\Services\Implement;


use App\Http\Repositories\Implement\PostRepositoryImpl;
use App\Http\Services\PostInterface;
use App\Post;

class PostServiceImpl implements PostInterface
{
    protected $repoPost;

    public function __construct(PostRepositoryImpl $repoPost)
    {
        $this->repoPost = $repoPost;
    }

    public function getAll()
    {
        return $this->repoPost->getAll();
    }

    public function findById($id)
    {
        return $this->repoPost->getAll();
    }

    public function create($request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->date = $request->date;
        $post->customer_id = $request->customer_id;
        return $this->repoPost->store($post);
    }

    public function update($request, $id)
    {
        $post = $this->repoPost->findById($id);
        return $this->repoPost->update($request, $post);
    }

    public function delete($id)
    {
        $post = $this->repoPost->findById($id);
        $this->repoPost->delete($post);
    }
}