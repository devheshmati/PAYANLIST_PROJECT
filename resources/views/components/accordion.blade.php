<style>
    .accordion-item>.accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .accordion-item.active>.accordion-content {
        max-height: 100px;
    }
</style>

<div class="accordion w-full sm:w-[60%]">
    <ul class="accordion-container">
        @foreach ($accList as $item)
            <li class="accordion-item flex flex-col gap-2 border-b-1 border-slate-400 py-5">
                <div class='flex justify-between text-md sm:text-xl items-center'>
                    <h3 class="accordion-header font-[Oswald] w-[90%] sm:tracking-wide">{{ $item['title'] }}</h3>
                    <span
                        class="accordion-icon flex justify-center items-center rounded-full border-2 border-purple-600 w-[30px] h-[30px] text-purple-600">+</span>
                </div>
                <p class="accordion-content text-sm opacity-60">
                    {{ $item['content'] }}
                </p>
            </li>
        @endforeach
    </ul>
</div>

<script type="module" src="/js/accordion.js" defer></script>
