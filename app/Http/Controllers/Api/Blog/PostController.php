<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Fetch all posts
    public function index()
    {
        $posts = BlogPost::with(['user', 'category'])->get();
        return response()->json($posts);
    }

    // Fetch a single post by ID
    public function show($id)
    {
        $post = BlogPost::with(['user', 'category'])->find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json($post);
    }
}
