<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function create(Request $request, int $id)
    {
        $comment = Comment::create($request->all());
        $comment->user()->associate(auth()->user());
        $comment->post()->associate(Post::findOrFail($id));
        $comment->save();
        return response()->json($comment, 201);
    }
}
