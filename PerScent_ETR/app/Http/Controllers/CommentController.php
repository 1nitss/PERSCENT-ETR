<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->product_id = $request->input('product_id');
        $comment->user_no = $request->input('user_no');
        $comment->username = $request->input('username');
        $comment->comment = $request->input('comment');
        $comment->date_created = Carbon::now();
        $comment->save();

        return redirect()->back()->with('success', 'Comment submitted successfully.');
    }
}
