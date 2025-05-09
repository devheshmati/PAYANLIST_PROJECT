<aside class="sidebar bg-slate-950 text-slate-400 z-10 w-[50px] transition-all absolute h-screen">
    <div class=''>
        <button type="button"
            class="sidebar-toggle-button flex justify-center items-center absolute top-1 right-[-1rem] rounded-full">
            <div class="sidebar-bars-icon flex justify-center items-center">
                <i
                    class="fa-solid fa-bars rounded-full p-3 bg-gradient-to-br from-slate-950 to-slate-700 shadow-[-1px_-1px_10px] shadow-slate-400 hover:shadow-purple-400 hover:text-white transition-all"></i>
            </div>
            <div class="sidebar-close-icon flex justify-center items-center hidden">
                <i
                    class="fa-solid fa-xmark rounded-full p-3 bg-gradient-to-br from-slate-950 to-slate-700 shadow-[-1px_-1px_10px] shadow-slate-400 hover:shadow-red-400 hover:text-white transition-all"></i>
            </div>
        </button>
        <ul class="sidebar-list flex flex-col justify-center items-center transition-all overflow-x-hidden pt-20">
            <li class="sidebar-item">
                <a href="{{ route('user.dashboard') }}" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-layer-group"></i>
                    <h3 class="sidebar-title transition-all hidden whitespace-nowrap">Workflows</h3>
                </a>
                <div class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-plus"></i>
                    <button type="button" class="sidebar-title transition-all hidden whitespace-nowrap">Create
                        Workflow</button>
                </div>
            </li>
        </ul>
        <ul class="sidebar-list flex flex-col justify-center items-center transition-all overflow-x-hidden mt-4">
            <li class="sidebar-item">
                <a href="{{ route('user.dashboard') }}" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-gauge"></i>
                    <h3 class="sidebar-title transition-all hidden whitespace-nowrap">Dashboard</h3>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('user.profile') }}" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-user"></i>
                    <h3 class="sidebar-title transition-all hidden whitespace-nowrap">Profile</h3>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('user.reports') }}" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-newspaper"></i>
                    <h3 class="sidebar-title transition-all hidden whitespace-nowrap">Reports</h3>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('user.settings') }}" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h3 class="sidebar-title transition-all hidden whitespace-nowrap">Settings</h3>
                </a>
            </li>
            <li class="sidebar-item mt-10">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <h3 class="sidebar-title transition-all hidden whitespace-nowrap">Logout</h3>
                    </button>
                </form>
            </li>
        </ul>
    </div>

    @vite('resources/js/user-sidebar.js')
</aside>
