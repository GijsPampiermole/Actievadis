<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request) {
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->activity_id = $request->id;
        $comment->message = $request->reactie;
        $comment->save();
        return redirect('/');
    }
}
