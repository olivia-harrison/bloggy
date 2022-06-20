<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-center bg-gray-100">
                <div
                    class="py-2 transition duration-500 transform bg-white rounded-lg shadow-lg cursor-pointer w-80 hover:shadow-2xl hover:scale-105">
                    <div class="flex items-center mb-2 space-x-4">
                        <img class="w-10 ml-2 rounded-full" src="{{ asset('me.jpg') }}" alt="Olivia Harrison" />
                        <div>
                            <h1 class="mb-1 text-xl font-bold text-gray-700">Olivia Harrison</h1>
                            <p class="text-sm font-normal text-gray-600 mr-14 hover:underline">#Livewire ~2 hours ago
                            </p>
                        </div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 transition duration-200 hover:text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </span>
                    </div>
                    <img src="{{ asset('post.jpg') }}" alt="" />
                    <div class="flex justify-between px-10 py-6">
                        <span>
                            @livewire('posts.like', compact('post'))
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
