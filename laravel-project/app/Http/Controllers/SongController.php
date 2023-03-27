<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // 
    function index()
    {
        return view('songs.index', [
            'songs' => Song::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
}
