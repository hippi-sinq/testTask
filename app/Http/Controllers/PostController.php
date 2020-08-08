<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Tymon\JWTAuth\Http\Middleware\Authenticate;

class PostController extends Controller
{
   public function Post()
   {
       return response()->json(Post::get(), 200);
   }

    public function PostEdit(Request $request, Post $post, $id){
       $post = Post::findOrFail($id);
       $post->update($request->all());
       return response()->json($post, 200);
    }

    public function PostById($id)
    {
        $post = Post::findOrFail($id);
        return response()->json(Post::find($id),200);
    }

    public function PostDelete(Request $request, Post $post, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json('',204);
    }

    public function PostCreate(Request $request)
    {
        $post = Post::create($request->all());
        $post->user()->associate(auth()->user());
        $post->save();
        return response()->json($post,  201 );
    }

}
