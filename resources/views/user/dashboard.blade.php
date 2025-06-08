<x-layout title="User Panel Dashboard Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-white">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">Dashboard</h1>
            </div>
        </section>

        <section>
            <div>
                <h3 class="font-[Oswald] text-xl font-bold p-4 mt-4">
                    <i class="fa-regular fa-clock"></i>
                    Recent Workspaces
                </h3>

                <ul class="flex gap-2 mx-auto w-[90%]">
                    <li>
                        <a href="#"
                            class="flex flex-col cursor-pointer bg-slate-500 p-4 rounded-lg hover:shadow-[-1px_-1px_1rem] hover:shadow-slate-white">
                            <h4 class="text-lg">Name of workspace</h4>
                            <div class="opacity-60 text-sm">
                                <span>Owner: reza2boyce</span>
                            </div>
                            <div class="opacity-60 text-sm">
                                <span>Last seen</span>
                                <span>Last updated</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col cursor-pointer bg-slate-500 p-4 rounded-lg hover:shadow-[-1px_-1px_1rem] hover:shadow-slate-white">
                            <h4 class="text-lg">Name of workspace</h4>
                            <div class="opacity-60 text-sm">
                                <span>Owner: reza2boyce</span>
                            </div>
                            <div class="opacity-60 text-sm">
                                <span>Last seen</span>
                                <span>Last updated</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section>
            <div class="">
                <h3 class="font-[Oswald] text-xl font-bold p-4 mt-4">
                    <i class="fa-regular fa-circle-question"></i>
                    About Tasks
                </h3>

                <div class="flex justify-between bg-slate-500 px-10 py-4 mx-auto w-[90%]">
                    <div class="text-slate-300">
                        <h6 class="font-bold font-[Oswald]">Total Todo Task</h6>
                        <p class="font-bold font-[Oswald] text-3xl">{{ $allTodoTasksCount }}</p>
                    </div>
                    <div class="text-orange-300">
                        <h6 class="font-bold font-[Oswald]">Total In Progress Task</h6>
                        <p class="font-bold font-[Oswald] text-3xl">{{ $allInProgressTasksCount }}</p>
                    </div>
                    <div class="text-lime-300">
                        <h6 class="font-bold font-[Oswald]">Total Done Task</h6>
                        <p class="font-bold font-[Oswald] text-3xl">{{ $allDoneTasksCount }}</p>
                    </div>
                </div>
            </div>
        </section>
    </x-main>
</x-layout>
