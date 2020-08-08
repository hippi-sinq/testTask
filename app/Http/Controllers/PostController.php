<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::all(), 200);
    }

    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post, 200);
    }

    public function delete(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json('', 204);
    }

    public function create(Request $request)
    {
        $post = Post::create($request->all());
        $post->user()->associate(auth()->user());
        $post->save();
        return response()->json($post,  201);
    }
}
