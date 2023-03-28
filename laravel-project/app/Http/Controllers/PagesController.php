<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'songs' => Song::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function favorite()
    {
        $user = User::find(auth()->user()->id);
        $favorites = $user->favorite()->with('song')->get();
        return view('pages.index', [
            'songs' => $favorites
        ]);
    }
    public function songs(Request $request)
    {
        return view('pages.songs', [
            'songs' => Song::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
}
