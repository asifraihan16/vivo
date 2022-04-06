<?php

namespace App\Http\Controllers;

use App\BlogComment;
use Exception;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'blog_id' => 'integer|required',
            'comment_body' => 'string|required',
            'comment_author_name' => 'string|nullable',
            'comment_author_email' => 'string|nullable',
        ]);

        if ($request->user()) {
            $validated['user_id'] = $request->user()->id;
        }

        try {
            BlogComment::create($validated);
            session()->flash('success', 'Comment posted successfully');
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return back();
    }
}
