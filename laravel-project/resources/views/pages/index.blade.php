<x-layout>
    @include('partials._main-sidebare')
    <x-container>
        <h2 class="text-4xl font-bold text-center text-gray-800 mt-10 mb-6 p-24">
            Hello <span class="text-indigo-500">{{ auth()->user()->name }}</span>
            Welcome to our website!
        </h2>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @foreach ($songs as $song)
                <div class="flex items-center justify-between gap-4 h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <audio controls loop hidden id="audio-player"
                        class="w-full bg-gray-100 rounded-lg p-2 shadow-md hover:shadow-lg transition duration-300">
                        Your browser does not support the audio tag.
                    </audio>

                    <img onclick="playSong('{{ asset('storage/' . $song->song_path) }}')"
                        src="{{ asset('storage/' . $song->cover_image) }}" alt="Song 1 Cover Image"
                        class="h-14 m-auto w-20">

                    <a href="/songs/{{$song->id}}"
                        class="text-gray-900 dark:text-white font-bold text-sm hover:text-indigo-500">
                        {{ $song->title }}
                    </a>

                    <svg class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 m-auto w-14 "
                        onclick="playSong('{{ asset('storage/' . $song->song_path) }}')" fill="none"
                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5V18M15 7.5V18M3 16.811V8.69c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 010 1.954l-7.108 4.061A1.125 1.125 0 013 16.811z">
                        </path>
                    </svg>

                </div>
            @endforeach
        </div>
        @unless(count($songs) == 0)

        <h2 class="text-4xl font-bold text-center text-gray-800 mt-10 mb-6">
            Prepared for <span class="text-indigo-600">You 😉</span>
        </h2>

        @endunless
        <div class="grid grid-cols-4 gap-4 mb-4">
            @foreach ($songs as $song)
                {{-- hidden --}}
                <div class="hidden flex items-center justify-between gap-4 h-24 rounded bg-gray-50 dark:bg-gray-800">

                    <audio controls loop hidden id="audio-player"
                        class="w-full bg-gray-100 rounded-lg p-2 shadow-md hover:shadow-lg transition duration-300">
                        Your browser does not support the audio tag.
                    </audio>

                    <img onclick="playSong('{{ asset('storage/' . $song->song_path) }}')"
                        src="{{ asset('storage/' . $song->cover_image) }}" alt="Song 1 Cover Image" class="h-14 m-auto">

                    <a href="songs/pl/{pl-name}">{{ $song->title }}</a>

                    <svg class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 m-auto w-14 "
                        onclick="playSong('{{ asset('storage/' . $song->song_path) }}')" fill="none"
                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5V18M15 7.5V18M3 16.811V8.69c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 010 1.954l-7.108 4.061A1.125 1.125 0 013 16.811z">
                        </path>
                    </svg>

                </div>

                {{-- Visible --}}
                <div class="flex flex-col bg-gray-50 dark:bg-gray-800 rounded-md p-4">

                    <div class="flex items-center justify-center h-full">
                        <img onclick="playSong('{{ asset('storage/' . $song->song_path) }}')"
                            src="{{ asset('storage/' . $song->cover_image) }}" alt="Song 1 Cover Image"
                            class="h-14 cursor-pointer hover:opacity-80 w-20">
                    </div>

                    <div class="flex flex-col items-center justify-center h-full m-2">
                        <a href="/songs/{{$song->id}}"
                            class="text-gray-900 dark:text-white font-bold text-sm hover:text-indigo-500">
                            {{ $song->title }}
                        </a>

                        <svg class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 m-auto w-14 "
                            onclick="playSong('{{ asset('storage/' . $song->song_path) }}')" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 7.5V18M15 7.5V18M3 16.811V8.69c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 010 1.954l-7.108 4.061A1.125 1.125 0 013 16.811z">
                            </path>
                        </svg>
                    </div>

                </div>
            @endforeach
        </div>


    </x-container>

</x-layout>
