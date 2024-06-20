<?php

namespace App\Repositories\ExternalRepositories\Blog\Author;

use App\Models\ExternalUsers\Blog\Author;
use Illuminate\Database\Eloquent\Collection;

class BlogAuthorRepository implements BlogAuthorRepositoryInterface
{


    public function getAutorByid(int $id): Collection
    {
        // TODO: Implement getAutorByid() method.
    }

    public function getAllAuthors(): ?Author
    {
        // TODO: Implement getAllAuthors() method.
    }

    public function createAuthor(array $author): ?Author
    {
        // TODO: Implement createAuthor() method.
    }

    public function updateAuthor(int $id, array $authorData): bool
    {
        // TODO: Implement updateAuthor() method.
    }

    public function deleteAuthor(int $id): bool
    {
        // TODO: Implement deleteAuthor() method.
    }
}
