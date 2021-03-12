<div>
    <nav
        class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4"
    >
        <div
            class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4"
        >
            <a
                class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
                href="{{ route('admin.index') }}"
            >Dashboard</a
            >
            <form
                class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
            >
                <div class="relative flex w-full flex-wrap items-stretch">
                <span
                    class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
                ><i class="fas fa-search"></i
                    ></span>
                    <input
                        type="text"
                        placeholder="Search here..."
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"
                    />
                </div>
            </form>
            <ul
                class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
                <a
                    class="text-gray-600 block"
                    href="javascript:void(0);"
                    onclick="openDropdown(event,'user-dropdown')"
                >
                    <div class="items-center flex">
                  <span
                      class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                  ><img
                          alt="..."
                          class="w-full rounded-full align-middle border-none shadow-lg"
                          src="{{ asset('theme/assets/img/team-1-800x800.jpg') }}"
                      /></span>
                    </div>
                </a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-dropdown"
                >
                    <a
                        href="{{ route('admin.index') }}"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                    ><a
                        href="{{ route('admin.index') }}"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                    ><a
                        href="{{ route('admin.index') }}"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                    >
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Logout</a
                    >
                    <form method="POST" action="{{ route('logout') }}" id="logout-form" class="hidden">
                        @csrf
                    </form>

                </div>
            </ul>
        </div>
    </nav>
</div>
