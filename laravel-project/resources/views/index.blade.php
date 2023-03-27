<x-layout>
    @include('partials._main-sidebare')
    <x-container>
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-between gap-4 h-24 rounded bg-gray-50 dark:bg-gray-800">
                <audio controls loop hidden id="audio-player"
                    class="w-full bg-gray-100 rounded-lg p-2 shadow-md hover:shadow-lg transition duration-300">
                    {{-- <source src="{{ url('/songs/top-G-dance.mp3') }}" type="audio/mpeg"> --}}
                    Your browser does not support the audio tag.
                </audio>
                <img onclick="playSong('/songs/al-fatiha.mp3')" src="{{ asset('images/baki-attract.jpeg') }}"
                    alt="" class="h-14 m-auto">
                <a href="songs/pl/{pl-name}">Pl aylist name</a>

                <svg class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 m-auto w-14 "
                    onclick="playSong('/songs/al-fatiha.mp3')" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 7.5V18M15 7.5V18M3 16.811V8.69c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 010 1.954l-7.108 4.061A1.125 1.125 0 013 16.811z">
                    </path>


                </svg>

            </div>
            <div class="flex items-center justify-between gap-4 h-24 rounded bg-gray-50 dark:bg-gray-800">
                <audio controls loop hidden id="audio-player"
                    class="w-full bg-gray-100 rounded-lg p-2 shadow-md hover:shadow-lg transition duration-300">
                    {{-- <source src="{{ url('/songs/top-G-dance.mp3') }}" type="audio/mpeg"> --}}
                    Your browser does not support the audio tag.
                </audio>
                <img onclick="playSong('/songs/ad-Duha.mp3')" src="{{ asset('images/baki-attract.jpeg') }}"
                    alt="" class="h-14 m-auto">
                <a href="songs/pl/{pl-name}">Playlist name</a>

                <svg class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 m-auto w-14 "
                    onclick="playSong('/songs/ad-Duha.mp3')" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 7.5V18M15 7.5V18M3 16.811V8.69c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 010 1.954l-7.108 4.061A1.125 1.125 0 013 16.811z">
                    </path>


                </svg>

            </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>
    </x-container>

</x-layout>
