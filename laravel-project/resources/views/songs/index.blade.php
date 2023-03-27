<x-layout>
    @include('partials._admin-sidebare')
    <x-container>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @unless(count($songs) == 0)

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        {{-- <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Cover
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Artist/group
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Writer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Language
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Release date
                        </th>
                        <th scope="col" class="px-6 py-3 w-1/9 hidden truncate">
                            Lyrics
                        </th>
                        <th scope="col" class="px-6 py-3">
                            duration
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($songs as $song)
                            <tr
                                class="text-xs bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ">
                                {{-- <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td> --}}
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img onclick="playSong('/songs/al-fatiha.mp3')" src="{{ $song->cover_image }}"
                                        alt="Song 1 Cover Image" class="h-16 w-16 m-auto object-cover rounded-lg">
                                    <audio controls loop hidden id="audio-player" />
                                </th>
                                <td class="px-6 py-4">
                                    {{ $song->title }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $song->artists }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $song->writers }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $song->languages }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $song->release_date }}
                                </td>
                                <td class="px-6 py-4 w-1/9 truncate hidden">
                                    {{ $song->lyrics }}
                                </td>
                                @php
                                    $seconds = $song['duration']; // Example number of seconds
                                    $minutes = floor($seconds / 60);
                                    $remainingSeconds = $seconds % 60;
                                @endphp
                                <td class="px-6 py-4">
                                    {{$minutes}}m{{$remainingSeconds}}s
                                </td>
                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <p>No listing found</p>
            @endunless
        </div>
    </x-container>

</x-layout>
