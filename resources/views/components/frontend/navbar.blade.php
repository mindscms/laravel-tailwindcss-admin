<div>
    <nav
        class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
        <div
            class="container px-4 mx-auto flex flex-wrap items-center justify-between"
        >
            <div
                class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
            >
                <a
                    class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                    href="{{ route('index') }}"
                >Notus JS</a
                ><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button"
                    onclick="toggleNavbar('example-collapse-navbar')"
                >
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div
                class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar"
            >
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-landing"
                        ><i
                                class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"
                            ></i>
                            Docs</a
                        >
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="inline-block relative">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="javascript:void(0);"
                            onclick="openDropdown(event,'demo-pages-dropdown')"
                        >
                            Demo Pages
                        </a>
                        <div
                            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="demo-pages-dropdown"
                        >
                <span
                    class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-no-wrap bg-transparent text-gray-500"
                >
                  Admin Layout
                </span>
                            <a
                                href="{{ route('admin.index') }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                            >
                                Dashboard
                            </a>
                            <a
                                href="{{ route('admin.settings') }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                            >
                                Settings
                            </a>
                            <a
                                href="{{ route('admin.tables') }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                            >
                                Tables
                            </a>
                            <a
                                href="{{ route('admin.maps') }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                            >
                                Maps
                            </a>
                            <div
                                class="h-0 mx-4 my-2 border border-solid border-gray-200"
                            ></div>

                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-no-wrap bg-transparent text-gray-500"
                            >
                  No Layout
                </span>
                            <a
                                href="{{ route('index') }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                            >
                                Lading
                            </a>
                            <a
                                href="{{ route('profile') }}"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                            >
                                Profile
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F"
                            target="_blank"
                        ><i
                                class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg"
                            ></i
                            ><span class="lg:hidden inline-block ml-2">Share</span></a
                        >
                    </li>
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                            target="_blank"
                        ><i
                                class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg"
                            ></i
                            ><span class="lg:hidden inline-block ml-2">Tweet</span></a
                        >
                    </li>
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://github.com/creativetimofficial/notus-js?ref=njs-landing"
                            target="_blank"
                        ><i
                                class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg"
                            ></i
                            ><span class="lg:hidden inline-block ml-2">Star</span></a
                        >
                    </li>
                    <li class="flex items-center">
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                            type="button"
                        >
                            <i class="fas fa-arrow-alt-circle-down"></i> Download
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
