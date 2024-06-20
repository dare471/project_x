<?php

namespace App\Repositories\ExternalRepositories\Blog\Category;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryRepository implements BlogCategoryRepositoryInterface
{
    public function getAll(): Collection
    {
        return BlogCategory::all();
    }

    public function getById(int $id): ?BlogCategory
    {
        return BlogCategory::find($id);
    }

    public function create(array $data): BlogCategory
    {
        return BlogCategory::create($data);
    }

    public function update(array $data, int $id): bool
    {
        $category = BlogCategory::findOrFail($id);
        return $category->update($data);
    }

    public function delete(int $id): bool
    {
        $category = BlogCategory::findOrFail($id);
        return $category->delete();
    }
}
