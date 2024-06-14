<?php
// app/Services/BlogService.php

namespace App\Services\ExternalServices;

use App\Repositories\ExternalRepositories\Blog\BlogRepositoryInterface;

class BlogService
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAllBlogs()
    {
        return $this->blogRepository->getAllBlogs();
    }

    public function getBlogById($id)
    {
        return $this->blogRepository->getBlogById($id);
    }

    public function createBlog(array $data)
    {
        return $this->blogRepository->createBlog($data);
    }

    public function updateBlog($id, array $data)
    {
        return $this->blogRepository->updateBlog($id, $data);
    }

    public function deleteBlog($id)
    {
        return $this->blogRepository->deleteBlog($id);
    }
}
