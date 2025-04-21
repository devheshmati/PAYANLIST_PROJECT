<x-layout>
    <x-main>
        @auth
            <div class="flex flex-col gap-6 bg-gray-800 m-auto w-50 p-4 text-white">
                <p class="">You are loged in!</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</button>
                </form>
            </div>
        @endauth
    </x-main>
</x-layout>
