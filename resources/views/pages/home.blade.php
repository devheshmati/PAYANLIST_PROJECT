<x-layout>
    <x-header />
    <x-main>
        {{-- Section 01 --}}
        <section>
            <div
                class="relative bg-linear-to-b from-gray-900 to-gray-600 h-[550px] flex flex-col justify-center items-center">
                <img src="/images/main-01.webp" alt="Abstract image"
                    class="absolute w-full h-full object-cover left-0 top-0">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-teal-950 to-black opacity-60 z-2">
                </div>
                <p class="z-10 text-white opacity-60 font-[Roboto] font-normal text-xl mb-1">Increase you power</p>
                <p class="font-[Oswald] text-4xl font-normal text-center text-white z-10 mb-4">Boost your
                    productivity with <strong
                        class="font-[Roboto] bg-gradient-to-br from-teal-400 via-gray-200 to-slate-400 inline-block text-transparent bg-clip-text text-5xl">Task
                        Manger</strong>
                </p>
                <p class="z-10 text-white opacity-60 font-[Roboto] font-normal text-xl w-[500px] mb-6 italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque accumsan vulputate velit, eu
                    sodales enim.
                </p>
                <div class="z-10 flex gap-4">
                    <a href="{{ route('login') }}" type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2 ">Get
                        Started</a>
                    <a href="{{ route('documents') }}" type="button"
                        class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Read
                        more...</a>
                </div>
            </div>
        </section>

        {{-- Section 02 --}}
        <section>
            <div
                class="flex flex-col gap-4 justify-center items-center bg-gradient-to-b from-black to-gray-700 py-[6rem] text-center">
                <h2 class="font-[Oswald] text-3xl text-white tracking-[0.5rem]">About</h2>
                <p class="font-[Roboto] opacity-60 font-normal text-justify text-white w-[80%]">Lorem ipsum dolor sit
                    amet,
                    consectetur adipiscing elit.
                    Pellentesque luctus
                    lorem sit amet dolor
                    auctor, eu porttitor dui scelerisque. Aliquam scelerisque urna non diam sagittis mattis. Sed
                    condimentum nec nibh id tristique. Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Curabitur ullamcorper magna non quam facilisis, porttitor interdum augue
                    mattis. Proin euismod id nibh a sollicitudin. Duis iaculis ante sed diam aliquam tincidunt. In vitae
                    ligula mi. Pellentesque nisi turpis, bibendum id ligula vel, facilisis tincidunt urna. Suspendisse
                    lobortis, tortor eget laoreet volutpat, tortor dui euismod turpis, vel finibus justo justo in
                    tortor. Cras vel augue aliquet, fringilla justo vel, laoreet ante. Duis facilisis volutpat ipsum, in
                    pulvinar enim malesuada non. </p>
            </div>
        </section>

        {{-- Section 03 --}}
        <section>
            <div class="bg-gray-700">
                <img src="/images/website-overview.webp" alt="Website Overview image"
                    class="w-[60%] mx-auto rounded-t-lg border border-8 border-black outline-1 outline-white">
                <div class="h-[1rem] bg-black border-t-1 border-b-1 border-white"></div>
            </div>
        </section>

        {{-- Section 04 --}}
        <section>
            <div
                class="flex flex-col justify-center items-center bg-gradient-to-b from-gray-700 to-slate-950 py-[4rem]">
                <p class="font-[Oswald] text-3xl text-gray-400 mb-10 tracking-widest">Who support us?</p>
                <ul class="flex w-full justify-around items-center">
                    <li>
                        <img src="/images/slack-logo.svg" alt="Slack Logo" class="h-[50px]">
                    </li>
                    <li>
                        <img src="/images/facebook-find-us-logo.svg" alt="Facebook Logo" class="h-[50px]">
                    </li>
                    <li>
                        <img src="/images/byte-records-logo.svg" alt="Byte records Logo" class="h-[50px]">
                    </li>
                    <li>
                        <img src="/images/intrax-logo.svg" alt="Intrax Logo" class="h-[50px]">
                    </li>
                    <li>
                        <img src="/images/silver-star-logo.svg" alt="Silver star Logo" class="h-[50px]">
                    </li>
                </ul>
            </div>
        </section>

        {{-- Section 05 --}}
        <section class="bg-slate-950 py-[6rem]">
            <div class="w-[80%] mx-auto text-white flex flex-col gap-2">
                <p class="flex gap-1 items-center opacity-80 font-[Oswald] tracking-widest text-md"><span><i
                            class="fa-regular fa-star"></i></span>EXTRA
                </p>
                <h3 class="font-[Roboto] text-3xl font-bold w-[80%]">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Pellentesque
                    luctus
                    lorem ipsum dolor sit amet</h3>
                <p class="font-[Roboto] opacity-60 w-[80%]">Vivamus at felis massa. Duis et condimentum ligula.
                    Pellentesque
                    habitant morbi
                    tristique senectus et
                    netus et malesuada fames ac turpis egestas. Mauris eleifend sollicitudin bibendum. Nullam quis
                    posuere libero. Suspendisse malesuada ex volutpat lacus sagittis.</p>
                <div class="mt-5 flex gap-4">
                    <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-4 rounded-lg">
                        <ul class="flex flex-col gap-2 overflow-y-scroll h-[200px] px-5">
                            <li
                                class="flex gap-3 items-center border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400">
                                <div
                                    class="p-4 bg-purple-600 rounded-full h-[50px] w-[50px] flex justify-center items-center">
                                    <i class="fa-regular fa-note-sticky text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-[Roboto] font-bold tracking-widest">Title One</h4>
                                    <p class="font-[Roboto] font-normal opacity-60 text-md">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Mauris aliquet. </p>
                                </div>
                            </li>
                            <li
                                class="flex gap-3 items-center border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400">
                                <div
                                    class="p-4 bg-purple-600 rounded-full h-[50px] w-[50px] flex justify-center items-center">
                                    <i class="fa-regular fa-note-sticky text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-[Roboto] font-bold tracking-widest">Title Two</h4>
                                    <p class="font-[Roboto] font-normal opacity-60 text-md">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Mauris aliquet. </p>
                                </div>
                            </li>
                            <li
                                class="flex gap-3 items-center border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400">
                                <div
                                    class="p-4 bg-purple-600 rounded-full h-[50px] w-[50px] flex justify-center items-center">
                                    <i class="fa-regular fa-note-sticky text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-[Roboto] font-bold tracking-widest">Title Three</h4>
                                    <p class="font-[Roboto] font-normal opacity-60 text-md">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Mauris aliquet. </p>
                                </div>
                            </li>
                            <li
                                class="flex gap-3 items-center border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400">
                                <div
                                    class="p-4 bg-purple-600 rounded-full h-[50px] w-[50px] flex justify-center items-center">
                                    <i class="fa-regular fa-note-sticky text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-[Roboto] font-bold tracking-widest">Title Four</h4>
                                    <p class="font-[Roboto] font-normal opacity-60 text-md">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Mauris aliquet. </p>
                                </div>
                            </li>
                            <li
                                class="flex gap-3 items-center border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400">
                                <div
                                    class="p-4 bg-purple-600 rounded-full h-[50px] w-[50px] flex justify-center items-center">
                                    <i class="fa-regular fa-note-sticky text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-[Roboto] font-bold tracking-widest">Title Five</h4>
                                    <p class="font-[Roboto] font-normal opacity-60 text-md">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit. Mauris aliquet. </p>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-5 px-5">
                            <h3 class="font-[Oswald] font-bold text-lg tracking-wide mb-2">Header Specials</h3>
                            <p class="font-[Roboto] text-md font-normal opacity-60">Suspendisse convallis tempus
                                feugiat. Ut
                                maximus
                                lacinia
                                tellus, vel maximus sapien
                                accumsan non. Donec sit amet velit a eros iaculis gravida et sed eros. Integer et enim
                                malesuada, imperdiet lorem sit amet, maximus arcu. Nunc in arcu lobortis, aliquet lectus
                                in</p>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-4 rounded-lg">
                        <ul class="grid grid-cols-2 gap-4 overflow-y-scroll h-[200px] px-5">
                            <li
                                class="text-white flex flex-col justify-center gap-1 border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400 h-fit">
                                <p class="font-[Roboto] font-normal text-lg">Weekly Activity</p>
                                <p class="font-[Roboto] text-4xl">86%</p>
                                <div class="flex gap-2 items-center font-[Roboto]">
                                    <span><img src="/images/chart-up.svg" alt="Chart up icon" class="h-[20px]"></span>
                                    <span class="text-lime-400 font-normal text-sm">4%</span>
                                    <span class="text-lime-400 font-normal text-sm">From Last week</span>
                                </div>
                            </li>
                            <li
                                class="text-white flex flex-col justify-center gap-1 border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400 h-fit">
                                <p class="font-[Roboto] font-normal text-lg">Task Manager</p>
                                <p class="font-[Roboto] text-4xl">20%</p>
                                <div class="flex gap-2 items-center font-[Roboto]">
                                    <span><img src="/images/chart-down.svg" alt="Chart up icon" class="h-[20px]"></span>
                                    <span class="text-red-400 font-normal text-sm">150%</span>
                                    <span class="text-red-400 font-normal text-sm">From Last week</span>
                                </div>
                            </li>
                            <li
                                class="text-white flex flex-col justify-center gap-1 border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400 h-fit">
                                <p class="font-[Roboto] font-normal text-lg">Total Working Hour</p>
                                <p class="font-[Roboto] text-4xl">54%</p>
                                <div class="flex gap-2 items-center font-[Roboto]">
                                    <span><img src="/images/chart-down.svg" alt="Chart up icon"
                                            class="h-[20px]"></span>
                                    <span class="text-red-400 font-normal text-sm">10%</span>
                                    <span class="text-red-400 font-normal text-sm">From Last week</span>
                                </div>
                            </li>
                            <li
                                class="text-white flex flex-col justify-center gap-1 border-1 border-gray-600 bg-gradient-to-br from-slate-900 to-slate-800 rounded-lg p-4 hover:border-gray-400 h-fit">
                                <p class="font-[Roboto] font-normal text-lg">Task Process</p>
                                <p class="font-[Roboto] text-4xl">186%</p>
                                <div class="flex gap-2 items-center font-[Roboto]">
                                    <span><img src="/images/chart-up.svg" alt="Chart up icon"
                                            class="h-[20px]"></span>
                                    <span class="text-lime-400 font-normal text-sm">20%</span>
                                    <span class="text-lime-400 font-normal text-sm">From Last week</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-5 px-5">
                            <h3 class="font-[Oswald] font-bold text-lg tracking-wide mb-2">Header Specials</h3>
                            <p class="font-[Roboto] text-md font-normal opacity-60">Suspendisse convallis tempus
                                feugiat. Ut
                                maximus
                                lacinia
                                tellus, vel maximus sapien
                                accumsan non. Donec sit amet velit a eros iaculis gravida et sed eros. Integer et enim
                                malesuada, imperdiet lorem sit amet, maximus arcu. Nunc in arcu lobortis, aliquet lectus
                                in</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-2">
                    <div
                        class="col-span-4 bg-gradient-to-br from-slate-800 to-slate-900 p-4 rounded-lg flex flex-col gap-4">
                        <ul class="grid grid-rows-2 place-items-center gap-4">
                            <div class="grid grid-cols-3 gap-4">
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/creative-cloud-logo.svg" alt="Creative Cloud Logo">
                                </li>
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/figma-logo.svg" alt="">
                                </li>
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/google-logo.svg" alt="">
                                </li>
                            </div>
                            <div class="grid grid-cols-4 gap-4">
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/heineken-logo.svg" alt="">
                                </li>
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/linkedin-logo.svg" alt="">
                                </li>
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/oracle-logo.svg" alt="">
                                </li>
                                <li
                                    class="p-4 w-[80px] h-[80px] bg-gradient-to-br from-slate-600 to-slate-900 rounded-lg shadow-lg shadow-cyan-500/50 flex justify-center items-center">
                                    <img src="/images/wedge-camp-logo.svg" alt="">
                                </li>
                            </div>
                        </ul>
                        <div class="flex flex-col gap-2 mt-2">
                            <h4 class="text-xl font-bold font-[Oswald]">Integrate With Your Favorite Tools</h4>
                            <p class="font-[Roboto] font-normal opacity-60">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Donec dictum porttitor nibh, sit amet venenatis ex dapibus et.
                                Vestibulum laoreet tellus quis velit condimentum congue.</p>
                        </div>
                    </div>
                    <div class="col-span-8 bg-gradient-to-br from-slate-800 to-slate-900 p-4 rounded-lg font-[Roboto]">
                        <div class="flex flex-col gap-4 bg-gradient-to-r from-slate-800 to-gray-800">
                            <div class="flex w-[90%] ms-auto rounded-l-lg gap-2 p-2 bg-purple-600">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <span>Oct 10 - Dec 19, 2024</span>
                            </div>
                            <div class="flex items-center w-[60%] ms-[15%] rounded-lg gap-2 p-2 bg-gray-700">
                                <span class=""><img src="/images/profiles/kaveh-profile-image.webp"
                                        alt="Kaveh profile image" class="w-[40px] h-[40px] rounded-full"></span>
                                <span class="">Kaveh Metanat</span>
                                <span
                                    class="ms-auto text-xs font-bold shadow-sm shadow-blue-400 text-blue-400 p-2 bg-gradient-to-br from-blue-950 to-slate-600 rounded-lg">In
                                    Process</span>
                            </div>
                            <div class="flex items-center w-[60%] ms-auto me-[15%] rounded-lg gap-2 p-2 bg-gray-700">
                                <span class=""><img src="/images/profiles/sara-profile-image.webp"
                                        alt="Sara profile image" class="w-[40px] h-[40px] rounded-full"></span>
                                <span class="">Sara Adib</span>
                                <span
                                    class="ms-auto text-xs font-bold shadow-sm shadow-green-400 text-green-400 p-2 bg-gradient-to-br from-green-950 to-slate-600 rounded-lg">Done</span>
                            </div>
                            <div class="flex items-center w-[60%] rounded-lg gap-2 p-2 bg-gray-700">
                                <span class=""><img src="/images/profiles/atena-profile-image.webp"
                                        alt="Atena profile image" class="w-[40px] h-[40px] rounded-full"></span>
                                <span class="">Atena Afshar</span>
                                <span
                                    class="ms-auto text-xs font-bold shadow-sm shadow-orange-400 text-orange-400 p-2 bg-gradient-to-br from-orange-950 to-slate-600 rounded-lg">Review</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 mt-6">
                            <h4 class="text-xl font-bold font-[Oswald]">Integrate With Your Favorite Tools</h4>
                            <p class="font-normal opacity-60">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Donec dictum porttitor nibh, sit amet venenatis ex dapibus et.
                                Vestibulum laoreet tellus quis velit condimentum congue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 06 --}}
        <section class="bg-slate-950 pt-8 pb-10 font-[Roboto]">
            <div class="grid grid-cols-12 gap-4 w-[80%] mx-auto">
                <div class="text-white col-span-4 flex flex-col gap-4">
                    <p class="flex gap-1 items-center opacity-80 font-[Oswald] tracking-widest text-md"><span><i
                                class="fa-solid fa-flask-vial"></i></span>FEATURES
                    </p>
                    <h3 class="text-4xl">AI-Powered Insights & Analytics</h3>
                    <a href="{{ route('login') }}" type="button"
                        class="mt-2 flex gap-2 w-fit text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-md px-3 py-2 text-center me-2 mb-2 "><span><i
                                class="fa-brands fa-staylinked"></i></span>Try
                        It Free</a>
                </div>
                <div class="col-span-8 text-white grid grid-cols-12 gap-6">
                    <div
                        class="col-span-6 flex flex-col gap-2 px-4 py-6 bg-gradient-to-br from-slate-800 to-slate-900 rounded-lg shadow-[-1px_-1px_5px_0px_rgba(149,_157,_165,_0.6)]">
                        <div
                            class="bg-gradient-to-b from-slate-950 to-gray-800 shadow-[0px_-2px_6px_0px_rgba(149,_157,_165,_0.6)] p-4 w-[50px] h-[50px] flex justify-center items-center rounded-lg mb-4 text-slate-200">
                            <i class="fa-regular fa-square-check text-xl"></i>
                        </div>
                        <h4 class="text-xl font-bold font-[Oswald]">Smart Task Prioritization</h4>
                        <p class="text-md opacity-60">Nunc auctor id ex eget condimentum. Cras
                            commodo, enim eu
                            rutrum congue,
                            dolor nisl faucibus
                            purus, sed pharetra nisi nisl fermentum augue</p>
                    </div>
                    <div
                        class="col-span-6 flex flex-col gap-2 px-4 py-6 bg-gradient-to-br from-slate-800 to-slate-900 rounded-lg shadow-[-1px_-1px_5px_0px_rgba(149,_157,_165,_0.6)]">
                        <div
                            class="bg-gradient-to-b from-slate-950 to-gray-800 shadow-[0px_-2px_6px_0px_rgba(149,_157,_165,_0.6)] p-4 w-[50px] h-[50px] flex justify-center items-center rounded-lg mb-4 text-slate-200">
                            <i class="fa-regular fa-calendar text-xl"></i>
                        </div>
                        <h4 class="text-xl font-bold font-[Oswald]">Adaptive Scheduling</h4>
                        <p class="text-md opacity-60">Nunc auctor id ex eget condimentum. Cras
                            commodo, enim eu
                            rutrum congue,
                            dolor nisl faucibus
                            purus, sed pharetra nisi nisl fermentum augue</p>
                    </div>
                    <div
                        class="col-span-6 flex flex-col gap-2 px-4 py-6 bg-gradient-to-br from-slate-800 to-slate-900 rounded-lg shadow-[-1px_-1px_5px_0px_rgba(149,_157,_165,_0.6)]">
                        <div
                            class="bg-gradient-to-b from-slate-950 to-gray-800 shadow-[0px_-2px_6px_0px_rgba(149,_157,_165,_0.6)] p-4 w-[50px] h-[50px] flex justify-center items-center rounded-lg mb-4 text-slate-200">
                            <i class="fa-solid fa-repeat text-xl"></i>
                        </div>
                        <h4 class="text-xl font-bold font-[Oswald]">Workflow Automation</h4>
                        <p class="text-md opacity-60">Nunc auctor id ex eget condimentum. Cras
                            commodo, enim eu
                            rutrum congue,
                            dolor nisl faucibus
                            purus, sed pharetra nisi nisl fermentum augue</p>
                    </div>
                    <div
                        class="col-span-6 flex flex-col gap-2 px-4 py-6 bg-gradient-to-br from-slate-800 to-slate-900 rounded-lg shadow-[-1px_-1px_5px_0px_rgba(149,_157,_165,_0.6)]">
                        <div
                            class="bg-gradient-to-b from-slate-950 to-gray-800 shadow-[0px_-2px_6px_0px_rgba(149,_157,_165,_0.6)] p-4 w-[50px] h-[50px] flex justify-center items-center rounded-lg mb-4 text-slate-200">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <h4 class="text-xl font-bold font-[Oswald]">Peformance Analytics</h4>
                        <p class="text-md opacity-60">Nunc auctor id ex eget condimentum. Cras
                            commodo, enim eu
                            rutrum congue,
                            dolor nisl faucibus
                            purus, sed pharetra nisi nisl fermentum augue</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 07 --}}
        <section class="text-white font-[Roboto] bg-slate-950">
            <div class="flex justify-around gap-4 p-[4rem] bg-purple-700 w-[80%] mx-auto rounded-xl my-[3rem]">
                <div class="flex flex-col gap-2 justify-center items-center">
                    <p class="text-5xl text-bold">9,230</p>
                    <p class="text-md opacity-70">Task Complete</p>
                </div>
                <div class="flex flex-col gap-2 justify-center items-center">
                    <p class="text-5xl text-bold">5,300</p>
                    <p class="text-md opacity-70">Task Member Join</p>
                </div>
                <div class="flex flex-col gap-2 justify-center items-center">
                    <p class="text-5xl text-bold">4,450</p>
                    <p class="text-md opacity-70">Project Completed</p>
                </div>
                <div class="flex flex-col gap-2 justify-center items-center">
                    <p class="text-5xl text-bold">8,910</p>
                    <p class="text-md opacity-70">Componies Using App</p>
                </div>
            </div>
        </section>

        {{-- section 08 --}}
        <section class="font-[Roboto] text-white bg-slate-950">
            <div class="w-[80%] mx-auto py-10">
                <div>
                    <p class="flex gap-1 items-center opacity-80 font-[Oswald] tracking-widest text-md"><span><i
                                class="fa-solid fa-flask-vial"></i></span>WHY US
                    </p>
                    <h3 class="text-3xl font-normal w-[70%]">Why Our AI-Powered Platform Is the Best Solution for
                        Supercharging
                        Your
                        Productivity Sed et risus</h3>

                </div>
                <div class="grid grid-cols-12 gap-6">
                    <div
                        class="flex flex-col gap-4 mt-6 rounded-lg col-span-6 bg-gradient-to-b from-slate-800 to-slate-950 gap-2 p-4 shadow-[-1px_-1px_5px_0px] shadow-slate-400">
                        <h4 class="text-xl">Overview Dashboard</h4>
                        <div
                            class="flex p-4 bg-gradient-to-tr from-slate-950 to-slate-800 shadow-[-1px_1px_3px_0px] shadow-slate-400 rounded-lg items-center justify-between">
                            <div class="flex flex-col gap-2">
                                <div>
                                    <p class="text-sm">Total Tasks Complete</p>
                                    <p class="text-xs opacity-60">Jan 1, 2024-Jun 30, 2024</p>
                                </div>
                                <div>
                                    <div>
                                        <span class="text-3xl">4,500</span>
                                        <span class="text-md">Tasks</span>
                                    </div>
                                    <div class="text-xs opacity-60">
                                        <span>9.2%</span>
                                        <span>Vs</span>
                                        <span>6</span>
                                        <span>Month</span>
                                        <span>Before</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <canvas class="w-[250px]" id="chart-01"></canvas>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-md">Task Breakdown</h4>
                            <div class="text-xs opacity-60">
                                <span>14.5%</span>
                                <span>Vs</span>
                                <span>2</span>
                                <span>Month</span>
                                <span>Before</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-12">
                            <div class='col-span-6 relative pt-[4rem]'>
                                <div class="absolute top-[5%] left-[5%] w-fit h-fit index-10">
                                    <p class="text-xs opacity-60">In Process</p>
                                    <p class="text-xl">900</p>
                                </div>
                                <canvas class="w-full" id="chart-02"></canvas>
                            </div>
                            <div class='col-span-6 relative pt-[4rem]'>
                                <div class="absolute top-[5%] left-[5%] w-fit h-fit index-10">
                                    <p class="text-xs opacity-60">Pending Approval</p>
                                    <p class="text-xl">350</p>
                                </div>
                                <canvas class="w-full" id="chart-03"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type='module' src="/js/charts.js" defer></script>
    </x-main>
    <x-footer />
</x-layout>
