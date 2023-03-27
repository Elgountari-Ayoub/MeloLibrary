<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Music Library</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <!-- js -->
    <script src="/js/main.js"></script>

    {{-- <script>
        function playSong(url) {
            var audio = document.getElementById('audio-player');
            audio.src = url;
            audio.play();
        }
    </script> --}}
    {{-- <script>
        function playSong(url) {
            var audio = document.getElementById('audio-player');
            if (audio.paused) {
                audio.src = url;
                audio.play();
            } else {
                audio.pause();
            }
        }
    </script> --}}

    {{-- <script>
        
        function playSong(url) {
            var audio = document.getElementById('audio-player');
            // console.log(audio.src + " == " + "http://127.0.0.1:8000" + url + " => " + (audio.src !== "http://127.0.0.1:8000" + url));
            console.log(audio.paused || audio.src !== "http://127.0.0.1:8000" + url);
            if (audio.paused || audio.src !== "http://127.0.0.1:8000" + url) {
                // Audio is paused or a different song is selected
                console.log(audio.currentTime);
                audio.currentTime = audio.currentTime || 0;
                audio.src = url;
                audio.play();
            } else {
                // Audio is playing, so pause it
                audio.pause();
            }
        }
    </script> --}}

    {{-- <script>
        var currentPlaybackTime = 0;
        function playSong(url, startTime = 0) {
            var audio = document.getElementById('audio-player');
            // console.log(url);
            console.log(audio);
            if (audio.src === url) {
                // If the same song is already playing
                if (audio.paused) {
                    // If it's paused, resume playback
                    audio.currentTime = currentPlaybackTime;
                    audio.play();
                } else {
                    // If it's playing, pause playback
                    currentPlaybackTime = audio.currentTime;
                    audio.pause();
                }
            } else {
                // Audio is not playing, load new song and start playing
                audio.src = url;
                audio.currentTime = startTime; // set start time
                audio.play();
            }
        }
    </script> --}}

    {{-- <script>
    
    function playSong(url, startTime = 0) {
      var audio = document.getElementById('audio-player');
    if (audio.paused || audio.src !== url) {
      // Audio is paused or a different song is selected
      audio.src = url;
      audio.currentTime = startTime; // set start time
      audio.play();
    } else {
      // Audio is playing, so pause it
      audio.pause();
    }
  }

  function continueSong() {
    if (audio.paused) {
      audio.play();
    }
  }
</script> --}}

    <script>
        function playSong(url, startTime = 0) {
            var audio = document.getElementById('audio-player');
            console.log(audio.currentTime);
            if (audio.src === "http://127.0.0.1:8000" + url) {
                // If the same song is already playing
                if (audio.paused) {
                    console.log('was paused');
                    // If it's paused, resume playback
                    audio.currentTime = audio.currentTime;
                    audio.play();
                } else {
                    console.log('was playing');
                    // If it's playing, pause playback
                    currentPlaybackTime = audio.currentTime;
                    audio.pause();
                }
            } else {
                console.log('was not playing');
                // Audio is not playing, load new song and start playing
                audio.src = url;
                audio.currentTime = startTime; // set start time
                audio.play();
            }
        }
    </script>

</head>

<body class="bg-gray-100 dark:bg-gray-800">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/" class="flex ml-2 md:mr-24">
                        <img src="/images/logo.png" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">MeloLibrary</span>
                    </a>
                </div>

                @include('partials._search')

                @auth

                    <div class="flex items-center">
                        <div class="flex items-center ml-3">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="user photo">
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        Welcome {{auth()->user()->name}}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        {{auth()->user()->email}}
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="/songs/index"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Dashboard</a>
                                    </li>
                                    {{-- <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Earnings</a>
                                    </li> --}}
                                    <li>
                                        <form   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem"
                                                method="POST" action="/logout">
                                            @csrf
                                            <button>
                                                Sign out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex justify-between gap-4">
                        <a href="/register"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                        </a>

                        <a href="/login"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </a>
                    </div>
                @endauth


            </div>
        </div>
    </nav>


    {{ $slot }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>
