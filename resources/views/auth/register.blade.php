<x-layout title="Register Page">
    <x-main>
        <form method="POST" action="{{ route('register') }}"
            class="w-[320px] m-auto bg-slate-500 px-4 py-7 rounded-lg shadow-md shadow-gray-700">
            @csrf
            <h1 class="text-2xl font-bold text-white mb-4 text-center">Register</h1>
            <div class="mb-5">
                @error('phone_number')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                    number:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                        <i class="fa-solid fa-phone text-gray-400"></i>
                    </div>
                    <input type="text" id="phone-input" aria-describedby="helper-text-explanation"
                        value="{{ old('phone_number') }}" name="phone_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        pattern="[0-9]{11}" placeholder="0903-1234567" />
                </div>
            </div>
            <div class="mb-5">
                @error('email')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" value="{{ old('email') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="email" placeholder="Email here..." />
            </div>
            <div class="mb-5">
                @error('password')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" id="password" value("{{ old('password') }}") name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Password here..." />
            </div>
            <div class="mb-5">
                @error('password_confirmation')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="confirm-password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                    password</label>
                <input type="password" id="confirm-password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="password_confirmation" placeholder="Enter passwrod again..." />
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-8">Submit</button>
            <div>
                <a href="{{ route('home') }}"
                    class="font-[Roboto] text-sm font-bold text-blue-400 hover:text-lime-400">-> Return to
                    home...</a>
            </div>
        </form>
    </x-main>
</x-layout>
