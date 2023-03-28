<x-layout>
    @include('partials._admin-sidebare')
    <x-container>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @unless(count($comments) == 0)

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-3/4">
                                comment
                            </th>

                            <th scope="col" class="px-6 py-3 w-1/4">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr
                                class="text-xs bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $comment->body }}
                                </th>
                                <td class="flex items-center px-6 py-8 space-x-3 ">

                                    <form method="POST" action="/comments/{{ $comment->id }}"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600">
                                            <i class="fa-solid fa-trash-can"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <p>No comments found</p>
            @endunless
        </div>
    </x-container>

</x-layout>
