<x-layout>
    <form method="POST" action="/songs/{{$song->id}}" class="md:px-52 sm:px-52 py-8 mt-14" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 md:grid-cols-2 ">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    title</label>
                <input type="text" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="title" placeholder="lose yourself" required value="{{ $song->title }}" />
                @error('title')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="artists" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    artists</label>
                <input type="text" id="artists"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="artists" placeholder="eminem" required value="{{ $song->artists }}" />
                @error('artists')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="writers" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    writers</label>
                <input type="text" id="writers"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="writers" placeholder="eminem" required value="{{ $song->writers }}" />
                @error('writers')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="languages" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    languages</label>
                <input type="text" id="languages"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="languages" placeholder="en" required value="{{ $song->languages }}" />
                @error('languages')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    duration</label>
                <input type="number" id="duration"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="duration" placeholder="Lorem ipsum dolor sit amet" required value="{{ $song->duration }}" />
                @error('duration')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="release_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    release Date</label>
                <input type="date" id="release_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="release_date" placeholder="Lorem ipsum dolor sit amet"
                    required value="{{ $song->release_date }}" />
                @error('release_date')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                    Cover image</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="cover_image" id="cover_image" type="file"value="{{ $song->cover_image }}" />
                @error('cover_image')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Song
                    file</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="song_file" id="song_file" type="file"value="{{ $song->song_file }}" />
                @error('song_file')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


        </div>
        <div class="mb-4">
            <label for="lyrics" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                lyrics</label>

            {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label> --}}
            <textarea rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="lyrics" id="lyrics" placeholder="Write your lyrics here...">{{ $song->lyrics }}
            </textarea>
            @error('lyrics')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

    <form action="{{ route('songs.store') }}" class="hidden md:px-52 sm:px-52 py-8 mt-14 " method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="cover_image" class="block text-gray-700 font-bold mb-2">Cover Image:</label>
            <input type="file" name="cover_image" id="cover_image" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('cover_image') }}">
            @error('cover_image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="song_file" class="block text-gray-700 font-bold mb-2">Song File:</label>
            <input type="file" name="song_file" id="song_file" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('song_file') }}">
            @error('song_file')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" name="title" id="title" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="artists" class="block text-gray-700 font-bold mb-2">Artist(s) or Group(s):</label>
            <input type="text" name="artists" id="artists" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('artists') }}">
            @error('artists')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="writers" class="block text-gray-700 font-bold mb-2">Writer(s):</label>
            <input type="text" name="writers" id="writers" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('writers') }}">
            @error('writers')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="languages" class="block text-gray-700 font-bold mb-2">Language(s):</label>
            <input type="text" name="languages" id="languages" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('languages') }}">
            @error('languages')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            {{-- <label for="release_date" class="block text-gray-700 font-bold mb-2">Release Date:</label> --}}
            <input type="date" name="release_date" id="release_date" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('release_date') }}">
            @error('release_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="lyrics" class="block text-gray-700 font-bold mb-2">Lyrics:</label>
            <textarea name="lyrics" id="lyrics" rows="5" class="py-2 px-3 border rounded-lg w-full">{{ old('lyrics') }}</textarea>
            @error('lyrics')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="duration" class="block text-gray-700 font-bold mb-2">Duration:</label>
            <input type="text" name="duration" id="duration" class="py-2 px-3 border rounded-lg w-full"
                value="{{ old('duration') }}">
            @error('duration')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Add
                Song</button>
        </div>
    </form>

</x-layout>