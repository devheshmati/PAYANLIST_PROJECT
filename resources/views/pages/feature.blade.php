<x-layout title="Feature Page">
    <x-header />
    <x-main>
        <section class="bg-neutral-400">
            <div class="grid grid-cols-1 md:grid-cols-3 relative">
                <!-- left -->
                <div class="flex flex-col max-h-[600px]">
                    <img src="{{ asset('/images/feature/task-man.webp') }}"
                        alt="A Man with a lot of task card in face and walls in graystyle image"
                        class="max-h-1/2 w-full object-cover">
                    <div class="my-auto text-center flex flex-col gap-4">
                        <i class="fa-solid fa-calendar-days text-5xl pt-4"></i>
                        <h3 class="font-[Oswald] tracking-wider text-lg">Stay <strong>Organized Effortlessly</strong>
                        </h3>
                        <p class="px-6 text-sm text-gray-700">PayanList is designed to help individuals and teams
                            manage tasks with
                            clarity.
                            With intuitive categorizes, statuses, and filtering options, you`ll always know what`s next
                            - without getting lost in complexity.</p>
                    </div>
                </div>

                <!-- center -->
                <div>
                    <img src="{{ asset('/images/feature/sand-timer.webp') }}"
                        alt="sand watch with paper in graystyle image"
                        class="w-full h-screen sm:h-[600px] object-cover">
                </div>

                <!-- right -->
                <div class="flex flex-col max-h-[600px]">
                    <img src="{{ asset('/images/feature/todo-status.webp') }}"
                        alt="A Man with a lot of task card in face and walls in graystyle image"
                        class="max-h-1/2 w-full object-cover order-2">
                    <div class="my-auto text-center flex flex-col gap-4">
                        <i class="fa-solid fa-calendar-days text-5xl pt-4"></i>
                        <h3 class="font-[Oswald] tracking-wider text-lg">Build for <strong>Team Collaboration</strong>
                        </h3>
                        <p class="px-6 text-sm text-gray-700">From solo projects to team-wide planning, PayanList lets
                            you assign tasks,
                            control permissions, and manage your workspace securely. Role-based access and real-time
                            sync keep everyone on the same page.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gradient-to-b from-neutral-400 to-neutral-200">
            <div class="py-20 text-center py-[8rem]">
                <div class="max-w-2xl mx-auto px-4">
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-gray-800 mb-4 font-[Oswald] tracking-wider">
                        Discover More <span class="text-primary">Details</span>
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-lg leading-relaxed">
                        PayanList isn’t just a task manager — it's a powerful tool built for productivity, focus, and
                        team alignment.
                        Dive deeper into the features that make your workflow smooth, smart, and scalable.
                    </p>
                </div>
            </div>
        </section>
        <x-footer />
    </x-main>
</x-layout>
