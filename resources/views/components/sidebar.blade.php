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
                <a href="#" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-user"></i>
                    <h3 class="transition-all hidden whitespace-nowrap">Profile</h3>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-newspaper"></i>
                    <h3 class="transition-all hidden whitespace-nowrap">Reports</h3>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h3 class="transition-all hidden whitespace-nowrap">Settings</h3>
                </a>
            </li>
            <li class="sidebar-item mt-10">
                <a href="#" class="flex gap-1 p-4 hover:bg-purple-800 hover:text-white">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3 class="transition-all hidden whitespace-nowrap">Logout</h3>
                </a>
            </li>
        </ul>
    </div>

    @vite('resources/js/user-sidebar.js')
</aside>
