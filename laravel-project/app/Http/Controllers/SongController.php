<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use getid3_core as getid3;

class SongController extends Controller
{
    // function getSongDuration($file_path) {
    //     $getID3 = new getID3;
    //     $file_info = $getID3->analyze($file_path);
    //     return $file_info['playtime_seconds'];
    // }



    // Show dashboard
    function index()
    {
        return view('songs.index', [
            'songs' => Song::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Show single
    function show(Song $song)
    {
        return view('songs.show', [
            'song' => $song,
            'comments' => $song->comments,
        ]);
    }

    function add()
    {
        return view('songs.add');
    }

    function create(Request $request)
    {
        $validatedData = $request->validate([
            'cover_image' => 'required|image',
            'song_file' => 'required|mimes:mp3',
            'title' => 'required|string|max:255',
            'artists' => 'required|string|max:255',
            'writers' => 'nullable|string|max:255',
            'languages' => 'nullable|string|max:255',
            'release_date' => 'nullable|date',
            'lyrics' => 'nullable|string',
            'duration' => 'required|numeric|min:0',
        ]);

        $song = new Song();

        $song->title = $validatedData['title'];
        $song->artists = $validatedData['artists'];
        $song->writers = $validatedData['writers'];
        $song->languages = $validatedData['languages'];
        $song->release_date = $validatedData['release_date'];
        $song->lyrics = $validatedData['lyrics'];
        $song->duration = $validatedData['duration'];

        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImagePath = $coverImage->store('public/song_covers');
            $song->cover_image = str_replace('public/', '', $coverImagePath);
        }

        if ($request->hasFile('song_file')) {
            $songFile = $request->file('song_file');
            $songFilePath = $songFile->store('public/songs');
            $song->song_path = str_replace('public/', '', $songFilePath);
        }

        $song->save();

        return redirect()->route('songs.index')->with('success', 'Song added successfully.'); {

            // // dd(request());
            // // Validate form input data
            // $validatedData = $request->validate([
            //     'title' => 'required|string|max:255',
            //     'artists' => 'required|string|max:255',
            //     'writers' => 'nullable|string|max:255',
            //     'languages' => 'nullable|string|max:255',
            //     'release_date' => 'nullable|date',
            //     'lyrics' => 'nullable|string',
            //     'duration' => 'required|integer|min:1',
            //     'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);

            // if ($request->hasFile('cover_image')) {
            //     $validatedData['cover_image'] = $request->file('cover_image')->store('cover_images', 'public');
            // }

            // // $validatedData['user_id'] = auth()->id();

            // Song::create($validatedData);
            // return redirect('/')->with('message', 'Song created successfully!');
        }
    }


    function edite(Song $song)
    {
        return view('songs.edite', [
            'song' => $song
        ]);
    }

    public function update(Request $request, Song $song)
    {
        $validatedData = $request->validate([
            'cover_image' => 'nullable|image',
            'song_file' => 'nullable|mimes:mp3',
            'title' => 'required|string|max:255',
            'artists' => 'required|string|max:255',
            'writers' => 'nullable|string|max:255',
            'languages' => 'nullable|string|max:255',
            'release_date' => 'nullable|date',
            'lyrics' => 'nullable|string',
            'duration' => 'required|numeric|min:0',
        ]);

        $song = Song::findOrFail($song->id);

        $song->title = $validatedData['title'];
        $song->artists = $validatedData['artists'];
        $song->writers = $validatedData['writers'];
        $song->languages = $validatedData['languages'];
        $song->release_date = $validatedData['release_date'];
        $song->lyrics = $validatedData['lyrics'];
        $song->duration = $validatedData['duration'];

        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImagePath = $coverImage->store('public/song_covers');
            $song->cover_image = str_replace('public/', '', $coverImagePath);
        } else {
            $song->cover_image = $song->cover_image;
        }

        if ($request->hasFile('song_file')) {
            $songFile = $request->file('song_file');
            $songFilePath = $songFile->store('public/songs');
            $song->song_path = str_replace('public/', '', $songFilePath);
        } else {
            $song->song_path = $song->song_path;
        }

        $song->save();

        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }

    function delete(Song $song)
    {

        $song->delete($song);
        return redirect('/songs/index')->with('message', 'Listing deleted successfully!');
    }

}
