<?php

namespace App\Repositories\ExternalRepositories\Blog\Category;
use App\Models\BlogCategory;
class BlogCategoryRepository implements BlogCategoryRepositoryInterface
{
    public function getAllCategories()
    {
        return BlogCategory::all();
    }

    public function getCategoryById($id)
    {
        return BlogCategory::findOrFail($id);
    }

    public function createCategory(array $data)
    {
        return BlogCategory::create($data);
    }

    public function updateCategory($id, array $data)
    {
        $category = BlogCategory::findOrFail($id);
        $category->update($data);

        return $category;
    }

    public function deleteCategory($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        return $category;
    }
}
