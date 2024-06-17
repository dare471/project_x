<?php

namespace App\Services\ExternalServices\Category;

use App\Repositories\ExternalRepositories\Blog\Category\BlogCategoryRepositoryInterface;
class BlogCategoryService
{
    protected $blogCategoryRepository;

    public function __construct(BlogCategoryRepositoryInterface $blogCategoryRepository)
    {
        $this->blogCategoryRepository = $blogCategoryRepository;
    }

    public function getAllCategories()
    {
        return $this->blogCategoryRepository->getAllCategories();
    }

    public function getCategoryById($id)
    {
        return $this->blogCategoryRepository->getCategoryById($id);
    }

    public function createCategory(array $data)
    {
        return $this->blogCategoryRepository->createCategory($data);
    }

    public function updateCategory($id, array $data)
    {
        return $this->blogCategoryRepository->updateCategory($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->blogCategoryRepository->deleteCategory($id);
    }
}
