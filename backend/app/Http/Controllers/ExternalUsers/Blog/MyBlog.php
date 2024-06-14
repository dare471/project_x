<?php
// app/Http/Controllers/ExternalUser/Blog/MyBlog.php

namespace App\Http\Controllers\ExternalUsers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ExternalServices\BlogService;

class MyBlog extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAllBlogs();
        return response()->json($blogs);
    }

    public function show($id)
    {
        $blog = $this->blogService->getBlogById($id);
        return response()->json($blog);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $blog = $this->blogService->createBlog($data);
        return response()->json($blog, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $blog = $this->blogService->updateBlog($id, $data);
        return response()->json($blog);
    }

    public function destroy($id)
    {
        $this->blogService->deleteBlog($id);
        return response()->json(null, 204);
    }
}
