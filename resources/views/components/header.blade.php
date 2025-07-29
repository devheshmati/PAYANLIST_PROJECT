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
                <button type="button" class="block md:hidden">
                    <i class="fa-solid fa-bars text-lg text-slate-300 hover:text-slate-100"></i>
                </button>
            </div>
            <div class="hidden md:flex w-full justify-center items-center w-auto" id="mobile-menu-2">
                <ul class="flex flex-col font-medium flex-row space-x-8 mt-0">
                    <li>
                        <a href="{{ route('home') }}" @class([
                            'block rounded p-0',
                            'text-white bg-primary-700 lg:bg-transparent lg:text-primary-700 dark:text-white' => request()->routeIs(
                                'home'),
                            'text-gray-700 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent border-0 lg:hover:text-primary-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs(
                                'home'),
                        ])
                            aria-current="{{ request()->routeIs('home') ? 'page' : '' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('feature') }}" @class([
                            'block rounded p-0',
                            'text-white bg-primary-700 lg:bg-transparent lg:text-primary-700 dark:text-white' => request()->routeIs(
                                'feature'),
                            'text-gray-700 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent border-0 lg:hover:text-primary-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs(
                                'feature'),
                        ])
                            aria-current="{{ request()->routeIs('feature') ? 'page' : '' }}">
                            Feature
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.show') }}" @class([
                            'block rounded p-0',
                            'text-white bg-primary-700 lg:bg-transparent lg:text-primary-700 dark:text-white' => request()->routeIs(
                                'contact'),
                            'text-gray-700 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent border-0 lg:hover:text-primary-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs(
                                'contact'),
                        ])
                            aria-current="{{ request()->routeIs('contact') ? 'page' : '' }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
