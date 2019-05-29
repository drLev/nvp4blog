<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = ['text'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
