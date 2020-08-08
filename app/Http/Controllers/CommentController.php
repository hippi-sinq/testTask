<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function CommentCreate(Request $request, int $id)
    {
        $comment = Comment::create($request->all());
        $comment->user()->associate(auth()->user());
        $comment->post()->associate(Post::findOrFail($id));
        return response()->json($comment, 201);
    }
}
