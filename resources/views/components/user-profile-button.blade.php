@php
    $user = Auth::user();
@endphp

<div class="relative flex justify-center items-center">
    <button class="user-profile-button" type="button">
        <img src="{{ $user?->detail?->profile_image
            ? asset('storage/' . $user->detail->profile_image)
            : asset('/images/profiles/nobody-avatar.webp') }}"
            alt="Kavhe Profile image"
            class="w-[30px] h-[30px] sm:w-[40px] sm:h-[40px] rounded-full cursor-pointer object-cover">
    </button>

    <div class="user-profile-dropdown absolute right-0 top-18 h-fit z-10 hidden">
        {{-- list of drop down should be include profile, settings, logout, subscribtion, user status --}}
        <ul class="bg-slate-950 text-slate-400 text-left w-[200px] text-lg rounded-lg">
            <li class="px-4 py-3 hover:bg-slate-900 hover:text-white">
                <a href="{{ route('user.profile') }}">Profile</a>
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
