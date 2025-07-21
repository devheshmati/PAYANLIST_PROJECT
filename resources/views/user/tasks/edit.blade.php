<x-layout title="Task Edit Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-slate-100">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">Edit Task: {{ $task->title }} in workspace:
                    {{ $workspace->name }}</h1>
                {{-- get workspace id in the hidden input, we need this for working with javascript --}}
                <input id="workspace-id" type="hidden" value="{{ $workspace->id }}">
            </div>
        </section>
        @if (session('success'))
            <section class="mt-5">
                <span class="bg-lime-600 py-2 px-2 ps-8 rounded-tr-lg">{{ session('success') }}</span>
            </section>
        @endif
        <section class="h-screen">
            <div class="flex justify-center items-center h-full">
                <form method="POST"
                    action="{{ route('workspaces.tasks.update', ['workspace' => $workspace, 'task' => $task]) }}"
                    class="flex flex-col gap-4 bg-gradient-to-br from-slate-950 to-slate-800 p-4 rounded-lg mt-4 w-[700px]">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col gap-2">
                        <label for="task_title" class="font-bold font-[Oswald]">Task Title</label>
                        <input id="task_title" type="text" name="title" value="{{ $task->title }}"
                            placeholder="Enter Title..." class="border-1 border-slate-400 py-2 px-4 rounded-lg">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="task_description">Task Description</label>
                        <textarea id="task_description" type="text" name="description" placeholder="Enter Description..."
                            class="border-1 border-slate-400 p-4">{{ $task->description }}</textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-purple-600 rounded-lg px-4 py-2">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </x-main>
</x-layout>
