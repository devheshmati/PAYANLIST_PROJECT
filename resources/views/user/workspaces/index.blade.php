<x-layout title="User Panel Workspaces Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-white">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">Workspace</h1>
            </div>
        </section>

        <section class="mt-4">
            <div class="">
                @if ($workspaces)
                    <div class="bg-slate-800 rounded-lg p-4 w-[90%] mx-auto">
                        <h3 class='text-2xl font-bold font-[Oswald]'>List</h3>
                        <ul
                            class="workspace-list grid grid-cols-4 gap-6 mt-8 overflow-y-scroll h-[320px] justify-between items-center p-4">
                            @foreach ($workspaces as $item)
                                <li>
                                    <a href="{{ route('workspaces.show', $item->id) }}"
                                        class="flex flex-col bg-slate-600 p-4 rounded-lg hover:shadow-[-1px_-1px_10px] hover:shadow-slate-200">
                                        <h3 class="text-lg">{{ $item->name }}</h3>
                                        <div class="text-sm text-slate-400">
                                            <div>
                                                <span>Members:</span>
                                                <span>15</span>
                                            </div>
                                            <div>
                                                <span>Team</span>
                                                <span>4</span>
                                            </div>
                                            <div>
                                                <span>Created at:</span>
                                                <span>{{ $item->created_at }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p>Not find any workspaces, you can create new workspace, you can access from sidebar to create new.
                    </p>
                @endif

            </div>
        </section>
    </x-main>
</x-layout>
