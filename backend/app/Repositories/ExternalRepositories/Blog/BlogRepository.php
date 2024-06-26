<?php
// app/Repositories/BlogRepository.php

namespace App\Repositories\ExternalRepositories\Blog;
use App\Models\Blog\Blog;

class BlogRepository implements BlogRepositoryInterface
{
    public function getAllBlogs()
    {
        return Blog::join('users', 'blogs.author_id', '=', 'users.id')
            ->leftjoin('ref_category_blog','blogs.category_id','=','ref_category_blog.id')
            ->select('blogs.*', 'users.name as author_name', 'ref_category_blog.name as category_name')
            ->get();
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
