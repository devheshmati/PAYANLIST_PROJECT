<x-layout title="User Panel Profile Page">
    <x-sidebar />
    <!-- avatar form as a model -->
    <div id="avatar-modal"
        class="modal fixed w-full h-full z-10 flex flex-col bg-[rgba(0,0,0,0.7)] justify-center items-center hidden">

        <div class="text-slate-100 bg-slate-800 rounded-lg relative w-[700px] h-[500px]">
            <form action="{{ route('user.profile.avatarUpdate') }}" method="POST" enctype="multipart/form-data"
                class="w-full h-full flex flex-col items-center justify-center gap-4">

                @error('profile_image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                {{-- نمایش تصویر آواتار --}}
                <img src="{{ $user->detail?->profile_image
                    ? asset('storage/' . $user->detail->profile_image)
                    : asset('images/profiles/nobody-avatar.webp') }}"
                    alt="User profile image" class="w-[250px] h-[250px] rounded-full object-cover">

                @csrf
                @method('PUT')

                {{-- ورودی فایل --}}
                <div class="flex gap-4 justify-center items-center">
                    <label for="avatar-input" class="text-nowrap">Upload file: </label>
                    <input
                        class="px-4 py-2 block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="avatar-input" type="file" name="profile_image" accept="image/*" required>
                </div>

                {{-- دکمه ارسال --}}
                <button id="modal-avatar-save-button" type="submit"
                    class="py-2 px-4 rounded-lg bg-blue-600 hover:bg-lime-500 absolute bottom-5 right-5">
                    Upload
                </button>
            </form>

            {{-- دکمه بستن مودال --}}
            <button id="close-skill-modal-btn" type="button"
                class="absolute right-5 top-5 hover:text-red-400 cursor-pointer">
                <i class="fa-solid fa-rectangle-xmark text-3xl"></i>
            </button>
        </div>

    </div>

    <!-- skill form as a model -->
    <div id="skill-modal"
        class="modal fixed w-full h-full z-10 flex flex-col bg-[rgba(0,0,0,0.7)] justify-center items-center hidden">
        <div class="text-slate-100 bg-slate-800 rounded-lg relative w-[700px] h-[500px]">
            <div class="p-4 w-3/4 h-5/6">
                <ul id="modal-skill-list"
                    class="bg-slate-600 p-2 rounded-lg grid grid-cols-4 auto-rows-min gap-2 justify-center items-start h-full gap-4 overflow-y-auto">
                </ul>
            </div>
            <div class="p-4 w-3/4 h-1/6 flex gap-4 items-end">
                <select id="skill-selection" class="h-fit px-4 py-2 rounded-lg bg-gray-400">
                    <option value="php">PHP</option>
                    <option value="css">CSS</option>
                    <option value="html">HTML</option>
                    <option value="javascript">JavaScript</option>
                    <option value="solid">SOLID</option>
                    <option value="frontend">FrontEnd</option>
                    <option value="backend">BackEnd</option>
                    <option value="fullstack">FullStack</option>
                    <option value="devops">DevOps</option>
                </select>
                <button type="Add" id="skill-selection-add-button"
                    class="px-4 py-2 rounded-lg bg-purple-600 h-fit">Add</button>
            </div>
            <button id="skill-modal-close-button" type="button"
                class="absolute right-5 top-5 hover:text-red-400 cursor-pointer">
                <i class="fa-solid fa-rectangle-xmark text-3xl"></i>
            </button>
            <button id="modal-skill-save-button" type="button"
                class="py-2 px-4 rounded-lg bg-blue-600 hover:bg-lime-500 absolute bottom-5 right-5">Save</button>
        </div>
    </div>

    <x-main class="ps-[50px] transition-all text-white">
        <!-- Page info section -->
        <section class="bg-slate-800">
            <div class="p-4">
                <h1 class="font-[Oswald] text-2xl text-right font-bold">Dashboard</h1>
            </div>
            @if (session('updateMessage'))
                <span class="text-center block bg-lime-600 text-lime-100">{{ session('updateMessage') }}</span>
            @endif
        </section>

        <!-- Information section -->
        <section>
            <!-- information -->
            <div
                class="text-slate-100 bg-gradient-to-b from-slate-900 to-slate-600 p-4 mx-auto w-[90%] mt-8 rounded-lg">
                <!-- In this page we need this data: -->
                <!-- avatar firstname lastname email username age jobtitle phonenumber -->
                <div class="">
                    <button id="avatar" type="button" class="group relative cursor-pointer">
                        <img src="{{ $user->detail?->profile_image
                            ? asset('storage/' . $user->detail->profile_image)
                            : asset('images/profiles/nobody-avatar.webp') }}"
                            alt="user profile image or avatar" class="w-[100px] h-[100px] rounded-full object-cover">
                        <div id="avatar-mark" class="absolute top-[-5px] right-[-10px] hidden group-hover:block ">
                            <i class="fa-solid fa-pencil text-slate-300"></i>
                        </div>
                    </button>
                </div>
                <div class="grid grid-cols-3 mt-2">
                    <div class="flex flex-col fit-content gap-1">
                        <div>
                            <span class="font-bold text-xl font-[Oswald]">
                                @if ($user->detail?->first_name and $user->detail?->last_name)
                                    {{ $user->detail?->first_name . ' ' . $user->detail?->last_name }}
                                @else
                                    <span class="text-red-400 text-lg">First or Last Name is undefined!?</span>
                                @endif
                            </span> <!-- Full Name -->
                        </div>
                        <div>
                            <span class="font-bold text-md text-slate-300 font-[Oswald]">
                                @if ($user->detail?->username !== null)
                                    {{ '@' . $user->detail->username }}
                                @else
                                    <span class="text-red-400 text-lg">username is undefined!?</span>
                                @endif
                            </span> <!-- username -->
                        </div>
                    </div>
                    <div class="flex flex-col fit-content gap-1">
                        <div>
                            <span class="font-bold font-[Oswald]">Email: </span>
                            <span class="font-bold text-xl font-[Oswald]">
                                @if ($user->email !== null)
                                    {{ $user->email }}
                                @else
                                    <span class="text-red-400 text-lg"></span>Email is undefined!?
                                @endif
                            </span> <!-- email -->
                        </div>
                    </div>
                    <div class="flex flex-col fit-content gap-1">
                        <div>
                            <span class="font-bold font-[Oswald]">Job Title: </span>
                            <span class="font-bold text-xl font-[Oswald]">
                                @if ($user->detail?->job_title !== null)
                                    {{ $user->detail->job_title }}
                                @else
                                    <span class="text-red-400 text-lg">Job Title is undefined!?</span>
                                @endif
                            </span> <!-- job title -->
                        </div>
                        <div>
                            <span class="font-bold font-[Oswald]">Phone: </span>
                            <span class="font-bold text-xl font-[Oswald]">
                                @if ($user->phone_number !== null)
                                    {{ $user->phone_number }}
                                @else
                                    <span class="text-red-400 text-lg">Job Title is undefined!?</span>
                                @endif
                            </span> <!-- phone number -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Me Section -->
            <div class="bg-slate-500 p-4 mx-auto w-[90%] mt-8 rounded-lg">
                <div class="relative">
                    <form id="description-form" method="POST" action="{{ route('user.profile.descriptionUpdate') }}"
                        class="px-4 text-sm text-slate-300 mt-4">
                        @csrf
                        @method('PUT')
                        <div class="flex items-center justify-between">
                            <h3 class="text-slate-100 font-bold font-[Oswald] tracking-wide text-xl">About Me</h3>
                            <button id="description-activator-btn" type="button" class="cursor-pointer">
                                <i class="fa-solid fa-pen-to-square text-gray-100 text-xl"></i>
                            </button>
                            <button id="description-form-save-button" type="submit"
                                class="cursor-pointer font-bold bg-blue-400 py-2 px-4 rounded-lg text-slate-100 hover:bg-lime-500 hidden">
                                Save
                            </button>
                        </div>
                        <textarea id="description-input" type="text" name="description" disabled rows="4"
                            class="w-full px-4 mt-4 text-justify">{{ $user->detail?->description }}</textarea>
                    </form>
                </div>
            </div>

            <!-- Skill Section-->
            <div class="bg-slate-500 p-4 mx-auto w-[90%] mt-8 rounded-lg">
                <form id="description-form" method="POST" action="{{ route('user.profile.descriptionUpdate') }}"
                    class="px-4 text-sm text-slate-300 mt-4">
                    @csrf
                    @method('PUT')
                    <div class="flex items-center justify-between">
                        <h3 class="text-slate-100 font-bold font-[Oswald] tracking-wide text-xl">Skills</h3>
                        <button id="skill-activator-btn" type="button" class="cursor-pointer">
                            <i class="fa-solid fa-pen-to-square text-gray-100 text-xl"></i>
                        </button>
                    </div>
                </form>
                @if (!empty($user->detail?->skills))
                    <ul class="grid grid-cols-8 gap-4 text-slate-600 text-sm mt-4 px-4">
                        @foreach ($skills as $skill)
                            <li class="p-2 rounded-lg bg-cyan-300 flex justify-center items-center">
                                {{ $skill }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-sm mt-4 px-8 text-yellow-400">No skills listed</p>
                @endif
            </div>

            <!-- main form Section (first-name, last-name, birth-date, job-title) -->
            <div class="bg-slate-500 p-4 mx-auto w-[90%] my-8 rounded-lg">
                <!-- last section should have margin bottom -->
                <h3 class="text-slate-100 font-bold text-xl">Edit Information</h3>
                <div class="mt-4">
                    <form id="main-form" method="POST" action="{{ route('user.profile.mainUpdate') }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 justify-center items-center gap-1">

                            <div class="flex flex-col mt-4">
                                @error('first_name')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror

                                <label for="first-name-input">First Name</label>
                                <div class="flex gap-2">
                                    <input id="first-name-input" type="text" name="first_name"
                                        value="{{ $user->detail?->first_name }}" placeholder="First name..."
                                        class="border-1 border-slate-400 px-4 py-2 rounded-lg w-1/2">
                                    <button id="first-name-activator-btn" type="button"
                                        class="active cursor-pointer">
                                        <i class="fa-solid fa-pen-to-square text-gray-400 text-xl"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col mt-4">
                                @error('last_name')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror

                                <label for="last-name-input">Last Name</label>
                                <div class="flex gap-2">
                                    <input id="last-name-input" type="text" name="last_name"
                                        value="{{ $user->detail?->last_name }}" placeholder="Last name..."
                                        class="border-1 border-slate-400 px-4 py-2 rounded-lg w-1/2">
                                    <button id="last-name-activator-btn" type="button"
                                        class="active cursor-pointer">
                                        <i class="fa-solid fa-pen-to-square text-gray-400 text-xl"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col mt-4">
                                @error('username')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror

                                <label for="job-title-input">Job Title</label>
                                <div class="flex gap-2">
                                    <input id="job-title-input" type="text" name="job_title"
                                        value="{{ $user->detail?->job_title }}" placeholder="Job title..."
                                        class="border-1 border-slate-400 px-4 py-2 rounded-lg w-1/2">
                                    <button id="job-title-activator-btn" type="button"
                                        class="active cursor-pointer">
                                        <i class="fa-solid fa-pen-to-square text-gray-400 text-xl"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col mt-4">
                                @error('username')
                                    <div>
                                        <p class="text-red-400">{{ $message }}</p>
                                    </div>
                                @enderror

                                <label for="username-input">username</label>
                                <div>
                                    <!-- birth date -->
                                    <input id="username-input" type="text" name="username"
                                        value="{{ $user->detail?->username }}" placeholder="username ..."
                                        class="border-1 border-slate-400 px-4 py-2 rounded-lg w-1/2">
                                    <button id="username-activator-btn" type="button" class="active cursor-pointer">
                                        <i class="fa-solid fa-pen-to-square text-gray-400 text-xl"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="main-form-save-button" type="submit"
                                class="w-fit bg-gray-400 py-2 px-4 rounded-lg mt-8" disabled>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </x-main>

    <script>
        window.skillListFromServer = @json($skills);
    </script>

    @vite('./resources/js/profile-page-handler.js');

    <style>
        button.active i {
            color: white;
        }
    </style>
</x-layout>
