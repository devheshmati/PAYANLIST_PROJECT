<header class="max-w-screen">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 w-full">
        <div class=" grid grid-cols-2 md:grid-cols-3  mx-auto">
            <div class="flex justify-start items-center">
                <a href="{{ route('home') }}" class="flex items-center justify-center gap-1">
                    <img src="/images/payanlist-logo-finish.svg" class="w-[20px] h-[20px]" alt="Payanlist Logo">
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white mb-[-4px]">PAYANLIST</span>
                </a>
            </div>

            <div class="flex justify-end items-center order-2 gap-4">
                @guest
                    <div class="hidden sm:block">
                        {{-- login button --}}
                        <a href="{{ route('showLogin') }}"
                            class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 opacity-60 hover:opacity-100">Log
                            in</a>

                        {{-- register button --}}
                        <a href="{{ route('showRegister') }}"
                            class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 opacity-60 hover:opacity-100">Register</a>
                    </div>
                @endguest

                @auth
                    <x-user-profile-button />
                @endauth
                <button type="button" class="block md:hidden cursor-pointer" id="hamburger-toggle-button">
                    <i class="fa-solid fa-bars text-lg text-slate-300 hover:text-slate-100"></i>
                </button>
            </div>

            <!-- normal navbar -->
            <div class="hidden md:flex w-full justify-center items-center">
                <x-nav-link />
            </div>
        </div>
    </nav>
</header>
