<div class="mx-52 ml-auto my-8 d-inline flex">


    <form action="/favorites/{{ $song->id }}" method="POST" class="d-inline mt-2 px-4">
        @csrf
        <input type="hidden" name="song_id" value="">
        <button type="submit"
            class="flex items-center p-2 text-base font-normal text-red-900 rounded-lg dark:text-white bg-red-100 hover:bg-red-200 dark:hover:bg-gray-700">
            {{-- @if (Auth::check() && Auth::user()->favorites->contains($song->id)) --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/> --}}
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                    </path>
                </svg>
            {{-- @else --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 24 24"
                    stroke="currentColor">
                    {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/> --}}
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                    </path>
                </svg>
            {{-- @endif --}}
        </button>
    </form>

    <form class="d-inline w-full" action="/comments" method="post">
        @csrf
        <label for="chat" class="sr-only">Your message</label>
        <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">

            <input type="hidden" name="song_id" value="{{ $song->id }}">
            <textarea name="body" rows="1"
                class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Your message..."></textarea>
            <button type="submit"
                class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                    </path>
                </svg>
                <span class="sr-only">Send message</span>
            </button>
        </div>
    </form>
</div>
