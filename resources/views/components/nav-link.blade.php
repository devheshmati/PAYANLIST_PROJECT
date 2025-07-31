<ul class="nav-link flex flex-col md:flex-row font-medium space-x-8 mt-0">
    <li class="w-full">
        <a href="{{ route('home') }}" @class([
            'block rounded px-4 py-2 md:p-0',
            'text-white bg-primary-700 lg:bg-transparent lg:text-primary-700 dark:text-white' => request()->routeIs(
                'home'),
            'text-gray-700 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent border-0 lg:hover:text-primary-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs(
                'home'),
        ])
            aria-current="{{ request()->routeIs('home') ? 'page' : '' }}">
            Home
        </a>
    </li>
    <li class="w-full">
        <a href="{{ route('feature') }}" @class([
            'block rounded px-4 py-2 md:p-0',
            'text-white bg-primary-700 lg:bg-transparent lg:text-primary-700 dark:text-white' => request()->routeIs(
                'feature'),
            'text-gray-700 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent border-0 lg:hover:text-primary-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs(
                'feature'),
        ])
            aria-current="{{ request()->routeIs('feature') ? 'page' : '' }}">
            Feature
        </a>
    </li>
    <li class="w-full">
        <a href="{{ route('contact.show') }}" @class([
            'block rounded px-4 py-2 md:p-0',
            'text-white bg-primary-700 lg:bg-transparent lg:text-primary-700 dark:text-white' => request()->routeIs(
                'contact.show'),
            'text-gray-700 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent border-0 lg:hover:text-primary-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs(
                'contact.show'),
        ])
            aria-current="{{ request()->routeIs('contact') ? 'page' : '' }}">
            Contact
        </a>
    </li>
</ul>
