<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $table = 'comments';

    protected $guarded = [];


    protected $with = [
        'user',
        'post'
    ];

    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function post():BelongsTo
    {
        return $this->BelongsTo(Post::class);
    }
}
