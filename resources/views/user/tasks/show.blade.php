<x-layout title="User Panel {{ $task->title }} Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-white">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">{{ $task->title }} Task</h1>
            </div>
        </section>

        <section class="bg-slate-900 py-10">
            <div>
                <p>The task Title is: {{ $task->title }}</p>
                <p>The task Description is: {{ $task->description }}</p>
                <p>The task Priority is: {{ $task->priority }}</p>
                <p>The task Score is: {{ $task->score }}</p>
                <p>The task Owner is: {{ $task->created_by }}</p>
                <p>The task Workspace is: {{ $task->workspace->name }}</p>
                <p>The task Create at: {{ $task->created_at }}</p>
            </div>
        </section>
    </x-main>

    <script></script>
</x-layout>
