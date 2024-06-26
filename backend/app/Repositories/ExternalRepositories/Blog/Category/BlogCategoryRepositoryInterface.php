<?php

namespace App\Repositories\ExternalRepositories\Blog\Category;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;
interface BlogCategoryRepositoryInterface
{
    public function getAll(): Collection;
    public function getById(int $id): ?Author;
    public function create(array $data): Author;
    public function update(array $data, int $id): bool;
    public function delete(int $id): bool2983523;
}
