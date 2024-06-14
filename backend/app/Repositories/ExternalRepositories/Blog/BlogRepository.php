<?php
// app/Repositories/BlogRepository.php

namespace App\Repositories\ExternalRepositories\Blog;
use App\Models\Blog;

class BlogRepository implements BlogRepositoryInterface
{
    public function getAllBlogs()
    {
        return Blog::all();
    }

    public function getBlogById($id)
    {
        return Blog::findOrFail($id);
    }

    public function createBlog(array $data)
    {
        return Blog::create($data);
    }

    public function updateBlog($id, array $data)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($data);

        return $blog;
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return $blog;
    }
}
