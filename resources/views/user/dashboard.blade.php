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

                @if ($recentWorkspaces->isNotEmpty())
                    <ul
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 mx-auto w-[90%] justify-between items-center">
                        @foreach ($recentWorkspaces as $item)
                            @if ($item->pivot->last_opened_at)
                                <li>
                                    <a href="{{ route('workspaces.show', $item->id) }}"
                                        class="flex flex-col cursor-pointer bg-slate-500 p-4 rounded-lg hover:shadow-[-1px_-1px_1rem] hover:shadow-slate-white">
                                        <h4 class="text-lg">{{ $item->name }}</h4>
                                        <div class="opacity-60 text-sm">
                                            <span class="font-bold">Owner:</span>
                                            <span>{{ $item->creator->email }}</span>
                                        </div>
                                        <div class="opacity-60 text-sm">
                                            <span class="font-bold">Last seen:</span>
                                            <span>{{ $item->pivot->last_opened_at }}</span>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>
        </section>

        <section>
            <div class="">
                <h3 class="font-[Oswald] text-xl font-bold p-4 mt-4">
                    <i class="fa-regular fa-circle-question"></i>
                    About Tasks
                </h3>

                <div class="grid grid-cols-12 bg-slate-500 px-10 py-4 mx-auto w-[90%] gap-4">
                    <div class="text-slate-300 col-span-12 sm:col-span-4 flex flex-col justify-between">
                        <h6 class="font-bold font-[Oswald]">Total Todo Task</h6>
                        <p class="font-bold font-[Oswald] text-3xl">{{ $allTodoTasksCount }}</p>
                    </div>
                    <div class="text-orange-300 col-span-12 sm:col-span-4 flex flex-col justify-between">
                        <h6 class="font-bold font-[Oswald]">Total In Progress Task</h6>
                        <p class="font-bold font-[Oswald] text-3xl">{{ $allInProgressTasksCount }}</p>
                    </div>
                    <div class="text-lime-300 col-span-12 sm:col-span-4 flex flex-col justify-between">
                        <h6 class="font-bold font-[Oswald]">Total Done Task</h6>
                        <p class="font-bold font-[Oswald] text-3xl">{{ $allDoneTasksCount }}</p>
                    </div>
                </div>
            </div>
        </section>
    </x-main>
</x-layout>
