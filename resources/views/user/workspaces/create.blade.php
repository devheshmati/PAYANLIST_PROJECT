<x-layout title="User Panel Create Workspace Page">
    <x-sidebar />
    <x-main class="ps-[50px] transition-all font-[Roboto] text-white">
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">Create Workspace</h1>
            </div>
        </section>

        <section class="my-auto">
            <div>
                <form method="POST" action="{{ route('workspaces.store') }}"
                    class="flex flex-col gap-4 w-[400px] bg-gradient-to-br from-slate-950 to-slate-800 p-4 rounded-lg mx-auto">
                    @if (session('message'))
                        <div class="bg-lime-600 p-2 rounded-lg">
                            <p>{{ session('message') }}</p>
                        </div>
                    @endif
                    @csrf
                    <div class="flex gap-2 justify-between">
                        <h2 class="font-[Oswald] font-bold text-xl">Create new workspace</h2>
                        <div class="text-right">
                            <span>0</span>
                            <span>/</span>
                            <span>5</span>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">

                        @error('name')
                            <div>
                                <p class="text-red-400">{{ $message }}</p>
                            </div>
                        @enderror

                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" placeholder="workspace name..."
                            class="border-1 border-slate-400 px-4 py-2 rounded-lg mt-2">
                    </div>
                    <div class="flex flex-col">
                        @error('description')
                            <div>
                                <p class="text-red-400">{{ $message }}</p>
                            </div>
                        @enderror

                        <label for="description">Description</label>
                        <textarea id="description" rows="4" cols="1" class="border-1 border-slate-400 px-4 py-2 rounded-lg mt-2"
                            name="description" placeholder="Workspace Description..."></textarea>
                    </div>
                    <button type="submit" class="w-fit bg-blue-600 py-2 px-4 rounded-lg mt-4">Create</button>
                </form>
            </div>
        </section>
    </x-main>
</x-layout>
