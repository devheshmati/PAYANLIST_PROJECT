<x-layout title="Login Page">
    <x-main>
        <form method="POST" action="{{ route('login') }}"
            class="w-[320px] m-auto bg-slate-500 px-4 py-7 rounded-lg shadow-md shadow-gray-700">

            @csrf

            <h1 class="text-2xl font-bold text-white mb-4 text-center">Login</h1>
            <div class="mb-5">
                @error('email')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Email here..." />
            </div>
            <div class="mb-5">
                @error('password')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Password here..." />
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                    me</label>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-8">Submit</button>
            <div>
                <a href="{{ route('home') }}"
                    class="font-[Roboto] text-sm font-bold text-blue-400 hover:text-lime-400">-> Return to
                    Home</a>
            </div>
            <div>
                <a href="{{ route('showRegister') }}"
                    class="font-[Roboto] text-sm font-bold text-blue-400 hover:text-lime-400">-> Go to
                    Register Page</a>
            </div>
        </form>
    </x-main>
</x-layout>
