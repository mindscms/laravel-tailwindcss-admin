<x-admin-layout>

    <div class="flex flex-wrap">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-800"
            >
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full max-w-full flex-grow flex-1">
                            <h6
                                class="uppercase text-gray-200 mb-1 text-xs font-semibold"
                            >
                                Overview
                            </h6>
                            <h2 class="text-white text-xl font-semibold">
                                Sales value
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="p-4 flex-auto">
                    <!-- Chart -->
                    <div class="relative h-350-px">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full xl:w-4/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full max-w-full flex-grow flex-1">
                            <h6
                                class="uppercase text-gray-500 mb-1 text-xs font-semibold"
                            >
                                Performance
                            </h6>
                            <h2 class="text-gray-800 text-xl font-semibold">
                                Total orders
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="p-4 flex-auto">
                    <!-- Chart -->
                    <div class="relative h-350-px">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap mt-4">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1"
                        >
                            <h3 class="font-semibold text-base text-gray-800">
                                Page visits
                            </h3>
                        </div>
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                        >
                            <button
                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button"
                            >
                                See all
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table
                        class="items-center w-full bg-transparent border-collapse"
                    >
                        <thead>
                        <tr>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                            >
                                Page name
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                            >
                                Visitors
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                            >
                                Unique users
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                            >
                                Bounce rate
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                /argon/
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                4,569
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                340
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                                46,53%
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                /argon/index.html
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                3,985
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                319
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                46,53%
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                /argon/charts.html
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                3,513
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                294
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                36,49%
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                /argon/tables.html
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                2,050
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                147
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                                50,87%
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                /argon/profile.html
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                1,795
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                190
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                46,53%
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w-full xl:w-4/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1"
                        >
                            <h3 class="font-semibold text-base text-gray-800">
                                Social traffic
                            </h3>
                        </div>
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                        >
                            <button
                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button"
                            >
                                See all
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table
                        class="items-center w-full bg-transparent border-collapse"
                    >
                        <thead class="thead-light">
                        <tr>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                            >
                                Referral
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                            >
                                Visitors
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left min-w-140-px"
                            ></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                Facebook
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                1,480
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <div class="flex items-center">
                                    <span class="mr-2">60%</span>
                                    <div class="relative w-full">
                                        <div
                                            class="overflow-hidden h-2 text-xs flex rounded bg-red-200"
                                        >
                                            <div
                                                style="width: 60%;"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                Facebook
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                5,480
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <div class="flex items-center">
                                    <span class="mr-2">70%</span>
                                    <div class="relative w-full">
                                        <div
                                            class="overflow-hidden h-2 text-xs flex rounded bg-green-200"
                                        >
                                            <div
                                                style="width: 70%;"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                Google
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                4,807
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <div class="flex items-center">
                                    <span class="mr-2">80%</span>
                                    <div class="relative w-full">
                                        <div
                                            class="overflow-hidden h-2 text-xs flex rounded bg-purple-200"
                                        >
                                            <div
                                                style="width: 80%;"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                Instagram
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                3,678
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <div class="flex items-center">
                                    <span class="mr-2">75%</span>
                                    <div class="relative w-full">
                                        <div
                                            class="overflow-hidden h-2 text-xs flex rounded bg-blue-200"
                                        >
                                            <div
                                                style="width: 75%;"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                            >
                                twitter
                            </th>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                2,645
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                            >
                                <div class="flex items-center">
                                    <span class="mr-2">30%</span>
                                    <div class="relative w-full">
                                        <div
                                            class="overflow-hidden h-2 text-xs flex rounded bg-orange-200"
                                        >
                                            <div
                                                style="width: 30%;"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
            charset="utf-8"
        ></script>
        <script type="text/javascript">
            (function () {
                /* Chart initialisations */
                /* Line Chart */
                var config = {
                    type: "line",
                    data: {
                        labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                        ],
                        datasets: [
                            {
                                label: new Date().getFullYear(),
                                backgroundColor: "#4c51bf",
                                borderColor: "#4c51bf",
                                data: [65, 78, 66, 44, 56, 67, 75],
                                fill: false,
                            },
                            {
                                label: new Date().getFullYear() - 1,
                                fill: false,
                                backgroundColor: "#fff",
                                borderColor: "#fff",
                                data: [40, 68, 86, 74, 56, 60, 87],
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        title: {
                            display: false,
                            text: "Sales Charts",
                            fontColor: "white",
                        },
                        legend: {
                            labels: {
                                fontColor: "white",
                            },
                            align: "end",
                            position: "bottom",
                        },
                        tooltips: {
                            mode: "index",
                            intersect: false,
                        },
                        hover: {
                            mode: "nearest",
                            intersect: true,
                        },
                        scales: {
                            xAxes: [
                                {
                                    ticks: {
                                        fontColor: "rgba(255,255,255,.7)",
                                    },
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Month",
                                        fontColor: "white",
                                    },
                                    gridLines: {
                                        display: false,
                                        borderDash: [2],
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.3)",
                                        zeroLineColor: "rgba(0, 0, 0, 0)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2],
                                    },
                                },
                            ],
                            yAxes: [
                                {
                                    ticks: {
                                        fontColor: "rgba(255,255,255,.7)",
                                    },
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Value",
                                        fontColor: "white",
                                    },
                                    gridLines: {
                                        borderDash: [3],
                                        borderDashOffset: [3],
                                        drawBorder: false,
                                        color: "rgba(255, 255, 255, 0.15)",
                                        zeroLineColor: "rgba(33, 37, 41, 0)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2],
                                    },
                                },
                            ],
                        },
                    },
                };
                var ctx = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(ctx, config);

                /* Bar Chart */
                config = {
                    type: "bar",
                    data: {
                        labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                        ],
                        datasets: [
                            {
                                label: new Date().getFullYear(),
                                backgroundColor: "#ed64a6",
                                borderColor: "#ed64a6",
                                data: [30, 78, 56, 34, 100, 45, 13],
                                fill: false,
                                barThickness: 8,
                            },
                            {
                                label: new Date().getFullYear() - 1,
                                fill: false,
                                backgroundColor: "#4c51bf",
                                borderColor: "#4c51bf",
                                data: [27, 68, 86, 74, 10, 4, 87],
                                barThickness: 8,
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        title: {
                            display: false,
                            text: "Orders Chart",
                        },
                        tooltips: {
                            mode: "index",
                            intersect: false,
                        },
                        hover: {
                            mode: "nearest",
                            intersect: true,
                        },
                        legend: {
                            labels: {
                                fontColor: "rgba(0,0,0,.4)",
                            },
                            align: "end",
                            position: "bottom",
                        },
                        scales: {
                            xAxes: [
                                {
                                    display: false,
                                    scaleLabel: {
                                        display: true,
                                        labelString: "Month",
                                    },
                                    gridLines: {
                                        borderDash: [2],
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.3)",
                                        zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2],
                                    },
                                },
                            ],
                            yAxes: [
                                {
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Value",
                                    },
                                    gridLines: {
                                        borderDash: [2],
                                        drawBorder: false,
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.2)",
                                        zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2],
                                    },
                                },
                            ],
                        },
                    },
                };
                ctx = document.getElementById("bar-chart").getContext("2d");
                window.myBar = new Chart(ctx, config);
            })();
        </script>
    @endpush
</x-admin-layout>
