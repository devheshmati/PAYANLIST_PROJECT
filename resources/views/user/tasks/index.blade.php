<x-layout title="User Panel Tasks Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-white">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">Tasks</h1>
            </div>
        </section>

        <section class="bg-slate-900 py-10">
            <ul class="grid grid-cols-4 p-4 gap-4">
                @if ($tasks)
                    @foreach ($tasks as $task)
                        <li>
                            <a href="#" class="p-4 bg-slate-600 flex flex-col rounded-lg">
                                <h6>{{ $task->title }}</h6>
                                <p>
                                    @if (!$task->description)
                                        <span class="text-slate-400">empty description!</span>
                                    @else
                                        {{ $task->description }}
                                    @endif
                                </p>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </section>
    </x-main>

    <script></script>
</x-layout>
