<?php

namespace App\Services\ExternalServices\Blog\Category;

use App\Repositories\ExternalRepositories\Blog\Category\BlogCategoryRepositoryInterface;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    protected BlogCategoryRepositoryInterface $blogCategoryRepository;

    public function __construct(BlogCategoryRepositoryInterface $blogCategoryRepository)
    {
        $this->blogCategoryRepository = $blogCategoryRepository;
    }

    public function getAllCategories(): Collection
    {
        return $this->blogCategoryRepository->getAll();
    }

    public function getCategoryById(int $id): ?BlogCategory
    {
        return $this->blogCategoryRepository->getById($id);
    }

    public function createCategory(array $data): BlogCategory
    {
        return $this->blogCategoryRepository->create($data);
    }

    public function updateCategory(array $data, int $id): bool
    {
        return $this->blogCategoryRepository->update($data, $id);
    }

    public function deleteCategory(int $id): bool
    {
        return $this->blogCategoryRepository->delete($id);
    }
}
