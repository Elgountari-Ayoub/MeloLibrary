<x-layout>
    @include('partials._main-sidebare')
    <x-container>
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('storage/' . $song->cover_image) }}" alt="Song Cover Image" class="w-full h-auto">
                </div>
                <div class="w-full md:w-2/3 px-4">
                    <h1 class="text-2xl font-bold mb-2">{{ $song->title }}</h1>
                    <div class="mb-4">
                        <span class="font-bold">Artists:</span>
                        <span>{{ $song->artists }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Writers:</span>
                        <span>{{ $song->writers }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Languages:</span>
                        <span>{{ $song->languages }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Release Date:</span>
                        <span>{{ $song->release_date }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Duration:</span>
                        <span>{{ $song->duration }}</span>
                    </div>
                    <div>
                        <span class="font-bold">Lyrics:</span>
                        <pre class="whitespace-pre-wrap">{{ $song->lyrics }}</pre>
                    </div>
                </div>
            </div>
            @include('partials._comment-card')
            <h2>Comments</h2>

            <ul>
                @foreach ($comments as $comment)
                    <li>
                        <strong>{{ $comment->user->name }}:</strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout>
