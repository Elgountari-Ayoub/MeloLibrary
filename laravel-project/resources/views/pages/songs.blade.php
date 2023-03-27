<x-layout>
    @include('partials._main-sidebare')
    <x-container>
        @unless(count($songs) == 0)
            <table class="table-auto border-collapse w-full">
                <thead>
                    <tr class="text-sm">
                        <th class="px-4 py-2 text-left">Cover Image</th>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Artist(s) or Group(s)</th>
                        <th class="px-4 py-2 text-left">Writer(s)</th>
                        <th class="px-4 py-2 text-left hidden">Language(s)</th>
                        <th class="px-4 py-2 text-left">Release Date</th>
                        <th class="px-4 py-2 text-left hidden">Lyrics</th>
                        <th class="px-4 py-2 text-left">Duration</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($songs as $song)
                        <tr class="text-xs">
                            <td class="border px-4 py-2">
                                <img onclick="playSong('/songs/al-fatiha.mp3')" src="{{ $song->cover_image }}"
                                    alt="Song 1 Cover Image" class="h-16 w-16 m-auto object-cover rounded-lg">
                                <audio controls loop hidden id="audio-player" />
                            </td>
                            <td class="border px-4 py-2">{{ $song->title }}</td>
                            <td class="border px-4 py-2">{{ $song->artists }}</td>
                            <td class="border px-4 py-2">{{ $song->writers }}</td>
                            <td class="border px-4 py-2 hidden">{{ $song->languages }}</td>
                            <td class="border px-4 py-2">{{ $song->release_date }}</td>
                            <td class="border px-4 py-2 hidden">{{ $song->lyrics }}</td>
                            @php
                                $seconds =  $song['duration'] ; // Example number of seconds
                                $minutes = floor($seconds / 60);
                                $remainingSeconds = $seconds % 60;
                            @endphp
                            <td class="border px-4 py-2">{{$minutes}}m{{$remainingSeconds}}s</td>
                        </tr>
                        {{-- <x-listing-card :listing="$listing" /> --}}
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No listing found</p>
        @endunless

    </x-container>

</x-layout>
