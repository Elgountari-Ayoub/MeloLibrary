<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    //
    public function store(Song $song)
    {
        // Check if the user has already liked the song
        $isLiked = Favorite::where('song_id', $song->id)
        ->where('user_id', Auth::id())
        ->exists();
        
        if ($isLiked) {
            // If the user has already liked the song, redirect back with an error message
            $favorite = Favorite::where('song_id', $song->id)
            ->where('user_id', Auth::id());
            $favorite->delete();
            return redirect()->back()->with('error', 'You have already liked this song.');
        }
        
        // If the user hasn't liked the song yet, create a new favorite record in the database
        $favorite = new Favorite;
        $favorite->song_id = $song->id;
        $favorite->user_id = Auth::id();
        $favorite->save();
        
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Song liked successfully!');
    }
}
