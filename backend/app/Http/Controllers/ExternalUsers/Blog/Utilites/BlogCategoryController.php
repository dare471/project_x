<?php

namespace App\Http\Controllers\ExternalUsers\Blog\Utilites;

use App\Services\ExternalServices\Category\BlogCategoryService;

class BlogCategoryController
{
    protected $categoryService;

    public function __construct(BlogCategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return response()->json($category);
    }

    public function store($request)
    {
        $data = $request->all();
        $category = $this->categoryService->createCategory($data);
        return response()->json($category, 201);
    }

    public function update($request, $id)
    {
        $data = $request->all();
        $category = $this->categoryService->updateCategory($id, $data);
        return response()->json($category);
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return response()->json(null, 204);
    }
}
