<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function index()
    {
        return view('comments.index', [
            'comments' => Comment::all(),
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'body' => 'required',
            'song_id' => 'required|exists:songs,id',
        ]);

        $comment = Comment::create([
            'body' => $validatedData['body'],
            'song_id' => $validatedData['song_id'],
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }
}
