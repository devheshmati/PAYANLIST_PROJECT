<x-layout title="User Panel {{ $workspace->name }} Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-white">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">{{ $workspace->name }}</h1>
                {{-- get workspace id in the hidden input, we need this for working with javascript --}}
                <input id="workspace-id" type="hidden" value="{{ $workspace->id }}">
            </div>
        </section>

        <section class="bg-slate-900 py-10">
            @if (session('message'))
                <span class="bg-lime-600 py-2 px-2 ps-8 rounded-tr-lg">New task is created!</span>
            @endif
            <div class="flex p-4 justify-around">
                <div class='flex flex-col w-100 h-100 bg-[rgba(100,100,150,0.2)] p-2'>
                    <h3 class="opacity-60 font-[Oswald] text-lg">Todo List</h3>
                    <ul id="todo-tasks-list"
                        class="todo-tasks-list flex flex-col gap-4 overflow-y-scroll mt-4 min-h-3/4">
                        @if ($tasks)
                            @foreach ($tasks as $item)
                                @if ($item->status === 'todo')
                                    <li class="task-item flex justify-between gap-4 bg-[rgba(160,160,180,0.5)] w-[90%] mx-auto"
                                        data-id="{{ $item->id }}">
                                        <span class="flex justify-between items-center w-100 px-2 py-4 gap-4">
                                            <span class="flex justify-between items-center gap-2">
                                                <span class="text-xs font-bold">
                                                    @if ($item->priority === 'low')
                                                        <span
                                                            class="text-lime-300 flex h-[20px] w-[20px] justify-center items-center bg-lime-600">L</span>
                                                    @endif
                                                    @if ($item->priority === 'medium')
                                                        <span
                                                            class="text-yellow-300 flex h-[20px] w-[20px] justify-center items-center bg-yellow-600">M</span>
                                                    @endif
                                                    @if ($item->priority === 'high')
                                                        <span
                                                            class="text-red-300 flex h-[20px] w-[20px] justify-center items-center bg-red-500">H</span>
                                                    @endif
                                                </span>
                                                <span class="">
                                                    @if ($item->score === 1)
                                                        <span class="text-lime-400">{{ $item->score }}</span>
                                                    @endif
                                                    @if ($item->score === 2)
                                                        <span class="text-yellow-400">{{ $item->score }}</span>
                                                    @endif
                                                    @if ($item->score === 3)
                                                        <span class="text-red-400">{{ $item->score }}</span>
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="flex-4 text-lg">
                                                {{ $item->title }}
                                            </span>
                                            <span class="flex justify-between gap-4 flex-1 text-lg">
                                                <span>
                                                    <a
                                                        href="{{ route('workspaces.tasks.edit', ['workspace' => $workspace->id, 'task' => $item->id]) }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <form
                                                        action="{{ route('workspaces.tasks.destroy', ['workspace' => $workspace->id, 'task' => $item->id]) }}"
                                                        method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </span>
                                            </span>
                                        </span>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class='flex flex-col w-100 h-100 bg-[rgba(252,128,3,0.2)] p-2'>
                    <h3 class="opacity-60 font-[Oswald] text-lg">In Progress</h3>
                    <ul id="in-progress-tasks-list"
                        class="in-porgress-tasks-list flex flex-col gap-4 overflow-y-scroll mt-4 min-h-3/4">
                        @if ($tasks)
                            @foreach ($tasks as $item)
                                @if ($item->status === 'in_progress')
                                    <li class="task-item flex justify-between gap-4 bg-[rgba(160,160,180,0.5)] w-[90%] mx-auto"
                                        data-id="{{ $item->id }}">
                                        <span class="flex justify-between items-center w-100 px-2 py-4 gap-4">
                                            <span class="flex justify-between items-center gap-2">
                                                <span class="text-xs font-bold">
                                                    @if ($item->priority === 'low')
                                                        <span
                                                            class="text-lime-300 flex h-[20px] w-[20px] justify-center items-center bg-lime-600">L</span>
                                                    @endif
                                                    @if ($item->priority === 'medium')
                                                        <span
                                                            class="text-yellow-300 flex h-[20px] w-[20px] justify-center items-center bg-yellow-600">M</span>
                                                    @endif
                                                    @if ($item->priority === 'high')
                                                        <span
                                                            class="text-red-300 flex h-[20px] w-[20px] justify-center items-center bg-red-500">H</span>
                                                    @endif
                                                </span>
                                                <span class="">
                                                    @if ($item->score === 1)
                                                        <span class="text-lime-400">{{ $item->score }}</span>
                                                    @endif
                                                    @if ($item->score === 2)
                                                        <span class="text-yellow-400">{{ $item->score }}</span>
                                                    @endif
                                                    @if ($item->score === 3)
                                                        <span class="text-red-400">{{ $item->score }}</span>
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="flex-4 text-lg">
                                                {{ $item->title }}
                                            </span>
                                            <span class="flex justify-between gap-4 flex-1 text-lg">
                                                <span>
                                                    <a
                                                        href="{{ route('workspaces.tasks.edit', ['workspace' => $workspace->id, 'task' => $item->id]) }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <form
                                                        action="{{ route('workspaces.tasks.destroy', ['workspace' => $workspace->id, 'task' => $item->id]) }}"
                                                        method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </span>
                                            </span>
                                        </span>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class='flex flex-col w-100 h-100 bg-[rgba(90,252,3,0.2)] p-2'>
                    <h3 class="opacity-60 font-[Oswald] text-lg">Done</h3>
                    <ul id="done-tasks-list"
                        class="done-tasks-list flex flex-col gap-4 overflow-y-scroll mt-4 min-h-3/4">
                        @if ($tasks)
                            @foreach ($tasks as $item)
                                @if ($item->status === 'done')
                                    <li class="task-item flex justify-between gap-4 bg-[rgba(160,160,180,0.5)] w-[90%] mx-auto"
                                        data-id="{{ $item->id }}">
                                        <span class="flex justify-between items-center w-100 px-2 py-4 gap-4">
                                            <span class="flex justify-between items-center gap-2">
                                                <span class="text-xs font-bold">
                                                    @if ($item->priority === 'low')
                                                        <span
                                                            class="text-lime-300 flex h-[20px] w-[20px] justify-center items-center bg-lime-600">L</span>
                                                    @endif
                                                    @if ($item->priority === 'medium')
                                                        <span
                                                            class="text-yellow-300 flex h-[20px] w-[20px] justify-center items-center bg-yellow-600">M</span>
                                                    @endif
                                                    @if ($item->priority === 'high')
                                                        <span
                                                            class="text-red-300 flex h-[20px] w-[20px] justify-center items-center bg-red-500">H</span>
                                                    @endif
                                                </span>
                                                <span class="">
                                                    @if ($item->score === 1)
                                                        <span class="text-lime-400">{{ $item->score }}</span>
                                                    @endif
                                                    @if ($item->score === 2)
                                                        <span class="text-yellow-400">{{ $item->score }}</span>
                                                    @endif
                                                    @if ($item->score === 3)
                                                        <span class="text-red-400">{{ $item->score }}</span>
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="flex-4 text-lg">
                                                {{ $item->title }}
                                            </span>
                                            <span class="flex justify-between gap-4 flex-1 text-lg">
                                                <span>
                                                    <a
                                                        href="{{ route('workspaces.tasks.edit', ['workspace' => $workspace->id, 'task' => $item->id]) }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <form
                                                        action="{{ route('workspaces.tasks.destroy', ['workspace' => $workspace->id, 'task' => $item->id]) }}"
                                                        method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </span>
                                            </span>
                                        </span>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-b from-slate-900 to-slate-600">
            <div class="flex flex-col">
                {{-- creating tasks, creating team, inviting users forms section --}}
                <div class="flex justify-center">
                    {{-- create task form --}}
                    <div class="p-4">
                        <h3 class="font-[Oswald] text-2xl font-bold">New Task</h3>
                        <form method="POST" action="{{ route('workspaces.tasks.store', $workspace) }}"
                            class="flex flex-col gap-4 bg-gradient-to-br from-slate-950 to-slate-800 p-4 rounded-lg mt-4">
                            @csrf
                            <div class="flex flex-col gap-2">
                                <label for="title">Task Title</label>
                                @error('title')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                                <input id="title" type="text" name="title" placeholder="Task title..."
                                    class="border-1 border-slate-400 py-2 px-4 rounded-lg">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="description">Task Description</label>
                                @error('description')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                                <input id="description" type="text" name="description"
                                    placeholder="Task description..."
                                    class="border-1 border-slate-400 py-2 px-4 rounded-lg">
                            </div>

                            {{-- priority --}}
                            <div class="flex flex-col gap-2">
                                <label for="priority">Priority</label>
                                <select id="priority" name="priority" class="bg-slate-500 p-2 rounded-lg">
                                    <option value="low" selected="selected">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>

                            {{-- score --}}
                            <div class="flex flex-col gap-2">
                                <label for="score">Score</label>
                                <select id="score" name="score" class="bg-slate-500 p-2 rounded-lg">
                                    <option value="1" selected="selected">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="bg-purple-600 rounded-lg px-4 py-2">Create Task</button>
                            </div>
                        </form>
                    </div>

                    {{-- Team managment section --}}
                    <div class="p-4">
                        <h3 class="font-[Oswald] text-2xl font-bold">Create New Team</h3>
                        <form method="POST" action="{{ route('workspaces.teams.store', $workspace) }}"
                            class="flex flex-col gap-4 bg-gradient-to-br from-slate-950 to-slate-800 p-4 rounded-lg mt-4">
                            @csrf
                            @if (session('teamCreationSuccessMessage'))
                                <div class="text-lime-500 p-2 bg-lime-100 rounded-lg my-2">
                                    {{ session('teamCreationSuccessMessage') }}
                                </div>
                            @endif

                            <div class="flex flex-col gap-2">
                                <label for="team-name">Team name</label>
                                @error('name')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                                <input id="team-name" type="text" name="name" placeholder="Enter Team name"
                                    class="border-1 border-slate-400 py-2 px-4 rounded-lg">
                            </div>

                            <div>
                                <button type="submit" class="bg-purple-600 rounded-lg px-4 py-2">Create New
                                    Team</button>
                            </div>
                        </form>
                    </div>

                    {{-- user invitation section --}}
                    <div class="p-4">
                        <h3 class="font-[Oswald] text-2xl font-bold">Invite New User</h3>
                        <form method="POST" action="{{ route('user.workspace.invite', $workspace) }}"
                            class="flex flex-col gap-4 bg-gradient-to-br from-slate-950 to-slate-800 p-4 rounded-lg mt-4">
                            @csrf
                            @if ($errors->has('userError'))
                                <div class="text-red-500 p-2 bg-red-100 rounded-lg my-2">
                                    {{ $errors->first('userError') }}
                                </div>
                            @endif
                            @if (session('successMessage'))
                                <div class="text-lime-500 p-2 bg-lime-100 rounded-lg my-2">
                                    {{ session('successMessage') }}
                                </div>
                            @endif

                            <div class="flex flex-col gap-2">
                                <label for="email">User Email</label>
                                @error('email')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror
                                <input id="email" type="email" name="email"
                                    placeholder="Enter target email."
                                    class="border-1 border-slate-400 py-2 px-4 rounded-lg">
                            </div>

                            {{-- roles selections --}}
                            <div class="flex flex-col gap-2">
                                @if ($roles->isEmpty())
                                    <div class="p-4 my-4 text-sm text-yellow-800 rounded-lg bg-yellow-100 dark:bg-gray-700 dark:text-yellow-300"
                                        role="alert">
                                        <span class="font-bold">There is not defined any roles!</span>
                                        <span class="font-normal">Just Super Admin Can define that!</span>
                                    </div>
                                @else
                                    <label for="role">Role</label>
                                    <select id="role" name="role_id" class="bg-slate-500 p-2 rounded-lg">
                                        @foreach ($roles as $role)
                                            @if ($role->name === 'member')
                                                <option value="{{ $role->id }}" selected>
                                                    {{ ucfirst($role->name) }}</option>
                                            @else
                                                <option value="{{ $role->id }}">
                                                    {{ ucfirst($role->name) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                @endif
                            </div>

                            <div>
                                <button type="submit" class="bg-purple-600 rounded-lg px-4 py-2">Invite User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- users lists and chat system section, intraction between users --}}
        <section class="bg-gradient-to-b from-slate-600 to-slate-900 py-4">
            <div class="flex">
                <div class="flex-1 p-4">
                    <h3 class="font-[Oswald] text-2xl font-bold">Users List</h3>
                    @if ($userInvitedList->isEmpty())
                        <div class="p-4 my-4 text-sm text-yellow-800 rounded-lg bg-yellow-100 dark:bg-gray-700 dark:text-yellow-300"
                            role="alert">
                            <span class="font-bold">There is no any invited user in this workspace!</span>
                            <span class="font-normal">You can invite user in your workspace with invitation
                                form.</span>
                        </div>
                    @else
                        <ul class="bg-gradient-to-br from-slate-950 to-slate-800 p-4 mt-4 rounded-lg">
                            @foreach ($userInvitedList as $item)
                                <li class="flex justify-between items-center border-1 border-slate-600 p-2 rounded-lg">
                                    <span>
                                        {{ $item->user->email }}
                                    </span>
                                    <span class="text-yellow-400 bg-slate-600 p-2 rounded-lg">
                                        @if ($item->role_id === 1)
                                            Owner
                                        @else
                                            {{ ucfirst(optional($roles->where('id', $item->role_id)->first())->name ?? '_') }}
                                        @endif
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="flex-1">
                    <h3 class="font-[Oswald] text-2xl font-bold">Team List</h3>
                    @if ($teamList->isEmpty())
                        <div class="p-4 my-4 text-sm text-yellow-800 rounded-lg bg-yellow-100 dark:bg-gray-700 dark:text-yellow-300"
                            role="alert">
                            <span class="font-bold">There is no any Team in this workspace!</span>
                            <span class="font-normal">You can create new Team in your workspace with Team creator
                                form.</span>
                        </div>
                    @else
                        <ul class="bg-gradient-to-br from-slate-950 to-slate-800 p-4 mt-4 rounded-lg">
                            @foreach ($teamList as $item)
                                <li class="flex justify-between items-center border-1 border-slate-600 p-2 rounded-lg">
                                    <span>
                                        {{ $item->name }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </section>
        <section class="hidden bg-red-400">
            {{-- get csrf token for working with javascript --}}
            <input id="csrf-token" type="hidden" name="csrf-token" value="{{ csrf_token() }}">
        </section>
    </x-main>

    {{-- Add drag and drop and task status changer --}}
    @vite('./resources/js/tasksStatusChangerScript.js');
</x-layout>
