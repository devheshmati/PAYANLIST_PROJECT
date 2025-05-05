<div class="relative">
    <button class="user-profile-button" type="button">
        <img src="/images/profiles/kaveh-profile-image.webp" alt="Kavhe Profile image"
            class="w-[40px] h-[40px] rounded-full cursor-pointer">
    </button>

    <div class="user-profile-dropdown absolute right-0 top-18 h-fit z-10 hidden">
        {{-- list of drop down should be include profile, settings, logout, subscribtion, user status --}}
        <ul class="bg-slate-950 text-slate-400 text-left w-[200px] text-lg rounded-lg">
            <li class="px-4 py-3 hover:bg-slate-900 hover:text-white">
                <a href="{{ route('user.profile') }}">Profile</a>
            </li>
            <li class="px-4 py-3 hover:bg-slate-900 hover:text-white">
                <a href="{{ route('user.settings') }}">Settings</a>
            </li>
            <li class="px-4 py-3 hover:bg-slate-900 hover:text-white">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>

        </ul>
    </div>

    @vite('resources/js/user-profile-button.js')
</div>
