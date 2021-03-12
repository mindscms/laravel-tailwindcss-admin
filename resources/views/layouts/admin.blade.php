<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="text-gray-800 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">

    <x-backend.sidebar/>

    <div class="relative md:ml-64 bg-gray-100">

        <x-backend.navbar/>

        <!-- Page Content -->
        <main>
            <!-- Header -->
            <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    Traffic
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            350,897
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                                                >
                                                    <i class="far fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-green-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since last month
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    New users
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            2,356
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                                                >
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-red-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since last week
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    Sales
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            924
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                                                >
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-orange-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since yesterday
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    Performance
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            49,65%
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500"
                                                >
                                                    <i class="fas fa-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-green-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since last month
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                {{ $slot }}

                <x-backend.footer/>
            </div>
        </main>

    </div>

</div>

@livewireScripts
@stack('script')
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script type="text/javascript">
    /* Make dynamic date appear */
    (function () {
        if (document.getElementById("get-current-year")) {
            document.getElementById(
                "get-current-year"
            ).innerHTML = new Date().getFullYear();
        }
    })();

    /* Sidebar - Side navigation menu on mobile/responsive mode */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
    }

    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>

</body>
</html>
