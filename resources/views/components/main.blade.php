<main {{ $attributes->merge(['class' => 'flex flex-col min-h-screen h-screen']) }}>
    <section>
        <div>
            <span
                class="bg-amber-500/10 text-amber-400 text-sm py-2 px-4 text-center w-full block border-b border-amber-500/20">
                PAYANLIST is in EARLY-ACCESS!
            </span>
        </div>
    </section>
    {{ $slot }}
</main>
