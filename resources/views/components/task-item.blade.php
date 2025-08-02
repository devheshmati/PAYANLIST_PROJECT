<li class="task-item flex justify-between gap-4 bg-[rgba(160,160,180,0.5)] w-[90%] mx-auto" data-id="{{ $item->id }}">
    <span class="flex justify-between items-center w-100 px-2 py-4 gap-4">
        <span class="flex justify-between items-center gap-2">
            <span class="text-xs font-bold">
                @if ($item->priority === 'low')
                    <span class="text-lime-300 flex h-[20px] w-[20px] justify-center items-center bg-lime-600">L</span>
                @endif
                @if ($item->priority === 'medium')
                    <span
                        class="text-yellow-300 flex h-[20px] w-[20px] justify-center items-center bg-yellow-600">M</span>
                @endif
                @if ($item->priority === 'high')
                    <span class="text-red-300 flex h-[20px] w-[20px] justify-center items-center bg-red-500">H</span>
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
                <a href="{{ route('workspaces.tasks.edit', ['workspace' => $workspace, 'task' => $item]) }}"
                    type="button">
                    <i class="fa-solid fa-pen-to-square cursor-pointer text-slate-300 hover:text-slate-100"></i>
                </a>
            </span>
            <span>
                <form action="{{ route('workspaces.tasks.destroy', ['workspace' => $workspace, 'task' => $item]) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="cursor-pointer text-slate-300 hover:text-slate-100">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </span>
        </span>
    </span>
</li>
