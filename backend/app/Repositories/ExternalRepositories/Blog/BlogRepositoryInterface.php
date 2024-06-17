<?php

namespace App\Repositories\ExternalRepositories\Blog;
interface BlogRepositoryInterface
{
    public function getAllBlogs();
    public function getBlogById($id);
    public function createBlog(array $data);
    public function updateBlog($id, array $data);
    public function deleteBlog($id);

}
