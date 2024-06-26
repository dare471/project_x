<?php

namespace App\Services\ExternalServices\Blog\Author;

use App\Models\ExternalUsers\Blog\Author;
use App\Repositories\ExternalRepositories\Blog\Author\BlogAuthorRepository;

class AuthorService
{
    protected BlogAuthorRepository $blogAuthorRepository;
    public function __construct(BlogAuthorRepository $blogAuthorRepository)
    {
        $this->blogAuthorRepository = $blogAuthorRepository;
    }

    public function getAllAuthors(): BlogAuthorRepository
    {
        return $this->blogAuthorRepository->getAllAuthors();
    }
    public function getAuthorById(int $id): ?Author
    {
        return $this->blogAuthorRepository->getAuthorById($id);
    }
    public function createAuthor(Author $author): Author
    {
        return $this->blogAuthorRepository->createAuthor($author);
    }
    public function updateAuthor(Author $author, Author $newAuthor): Author
    {
        return $this->blogAuthorRepository->updateAuthor($author, $newAuthor);
    }

}
