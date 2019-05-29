<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function add($postId, Request $request) {
        $post = Post::find($postId);
        if ($post) {
            $comment = new Comment($request->only(['text']));
            $comment->user_id = 0;
            $post->comments()->save($comment);
        }
        redirect()->route('post', ['id' => $postId])->send();
    }
}
