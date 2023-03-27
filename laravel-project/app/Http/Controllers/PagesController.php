<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function songs(Request $request)
    {
        return view('pages.songs', [
            'songs' => Song::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
}
