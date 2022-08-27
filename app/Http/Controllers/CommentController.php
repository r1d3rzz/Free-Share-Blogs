<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'comments' => ['required','min:2']
        ]);

        $blog->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('comments'),
        ]);

        return redirect('/blogs/'.$blog->slug);
    }
}
