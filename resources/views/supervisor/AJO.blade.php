<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-supervisor-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div>

                    <h1 class="text-2xl font-medium">
                        All job orders
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        View and monitor all job orders
                    </p>

                </div>


                <!-- Search + Filter -->
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">

                    {{-- Search --}}
                    <div class="relative max-w-sm flex-1 sm:max-w-sm">

                        <i
                            class="ti ti-search absolute left-3 top-1/2
                                -translate-y-1/2 text-gray-400"
                        ></i>

                        <input
                            type="text"
                            placeholder="Search Job Orders..."
                            class="w-full rounded-lg border border-gray-200
                                py-2 pl-9 pr-3 text-sm
                                focus:border-gray-300
                                focus:outline-none
                                focus:ring-2 focus:ring-gray-100"
                        >

                    </div>


                    {{-- Filter --}}
                    <div
                        class="relative"
                        x-data="{ open: false }"
                    >

                        <button
                            type="button"
                            @click="open = !open"
                            @click.outside="open = false"
                            class="inline-flex w-full items-center justify-center
                                gap-2 rounded-lg border border-gray-200
                                bg-white px-3 py-2 text-sm text-gray-600
                                transition hover:bg-gray-50
                                sm:w-auto"
                        >

                            <i class="ti ti-filter text-base"></i>

                            Filter

                            <i
                                class="ti ti-chevron-down text-xs transition-transform"
                                :class="{ 'rotate-180': open }"
                            ></i>

                        </button>


                        {{-- Filter Dropdown --}}
                        <div
                            x-show="open"
                            x-transition
                            class="absolute right-0 z-20 mt-2 w-48
                                rounded-xl border border-gray-200
                                bg-white p-2 shadow-lg"
                        >

                            <p class="px-3 py-2 text-xs font-medium uppercase tracking-wide text-gray-400">
                                Sort / Filter
                            </p>


                             {{-- Low-High --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-sort-descending text-base text-gray-400"></i>

                                Recent
                            </button>

                             {{-- High-Low --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-sort-descending text-base text-gray-400"></i>

                                Oldest
                            </button>


                            <div class="my-1 border-t border-gray-100"></div>


                            {{-- By Name --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By Customer
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By Vehicle
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By Mechanic
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                Approved
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                Rejected
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                Pending
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Table -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Job order records
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            All job orders submitted to the shop
                        </p>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>

                                <tr class="text-left text-gray-500 border-b border-gray-100">

                                    <th class="font-normal px-5 py-3">
                                        JO ID
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Customer
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Vehicle
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Mechanic
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Date
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Status
                                    </th>

                                    <th class="font-normal px-5 py-3 text-right">
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1045
                                    </td>

                                    <td class="px-5 py-3">
                                        Juan Dela Cruz
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Toyota Vios
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        John Cuyos
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 12
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-amber-50 text-amber-700 text-xs px-2.5 py-1 rounded-md">
                                            Pending
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">

                                        <button class="text-gray-400 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1042
                                    </td>

                                    <td class="px-5 py-3">
                                        Juan Dela Cruz
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Toyota Vios
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Adili
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 10
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-amber-50 text-amber-700 text-xs px-2.5 py-1 rounded-md">
                                            Pending
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">

                                        <button class="text-gray-400 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1040
                                    </td>

                                    <td class="px-5 py-3">
                                        Mark Santos
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Ford Ranger
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Adili
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 10
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Approved
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">

                                        <button class="text-gray-400 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1039
                                    </td>

                                    <td class="px-5 py-3">
                                        Liza Cruz
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Suzuki Ertiga
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Adili
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 9
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-red-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                            Rejected
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">

                                        <button class="text-gray-400 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </main>

        </div>

    </div>

</x-app-layout>