<?php

namespace App\Models;

use App\Http\Controllers\AuthController;
use App\User;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Http\Middleware\Authenticate;



class Post extends Model
{
//    public function __construct()
//    {
//        $this->middleware('Auth');
//    }

    protected $table = 'posts';

    protected $guarded = [];

    protected $with = [
        'user',
        'comments'
    ];

    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
