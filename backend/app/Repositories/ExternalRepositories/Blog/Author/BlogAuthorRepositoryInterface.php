<?php

namespace App\Repositories\ExternalRepositories\Blog\Author;


use App\Models\ExternalUsers\Blog\Author;
use Illuminate\Database\Eloquent\Collection;

interface BlogAuthorRepositoryInterface
{
    public function getAutorByid(int $id): Collection;
    public function getAllAuthors(): ?Author;
    public function createAuthor(array $author): ?Author;
    public function updateAuthor(int $id, array $authorData): bool;
    public function deleteAuthor(int $id): bool;
}
