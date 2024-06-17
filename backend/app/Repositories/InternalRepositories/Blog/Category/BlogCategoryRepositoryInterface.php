<?php

namespace App\Repositories\InternalRepositories\Blog\Category;

interface BlogCategoryRepositoryInterface
{
    public function getAllCategories();
    public function getCategoryById($id);
    public function createCategory(array $data);
    public function updateCategory($id, array $data);
    public function deleteCategory($id);
}
