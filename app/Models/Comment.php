<?php

namespace App\Models;

use App\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function post(): BelongsTo
    {
        return $this->BelongsTo(Post::class);
    }
}
